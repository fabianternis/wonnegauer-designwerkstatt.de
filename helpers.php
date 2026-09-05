<?php

use App\Core\App;

/**
 * Gets an environment variable with fallback.
 */
function env(string $key, mixed $default = null): mixed {
    $value = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key);
    if ($value === false || $value === null) {
        return $default;
    }
    return match (strtolower((string) $value)) {
        'true', '(true)' => true,
        'false', '(false)' => false,
        'empty', '(empty)' => '',
        'null', '(null)' => null,
        default => $value,
    };
}

/**
 * Returns the base URL with an optional path appended.
 * Includes automatic cache busting.
 */
function url(string $path = ''): string {
    $base = rtrim(App::getInstance()->config()->get('base_url', ''), '/');
    $cleanPath = ltrim($path, '/');
    
    if ($cleanPath === '') {
        return $base !== '' ? $base : '/';
    }
    
    $fullPath = ($base !== '' ? $base : '') . '/' . $cleanPath;
    
    $filePath = __DIR__ . '/public/' . $cleanPath;
    
    if (file_exists($filePath) && !is_dir($filePath)) {
        $version = filemtime($filePath);
        $fullPath .= '?v=' . $version;
    }
    
    return $fullPath;
}

/**
 * Returns the canonical absolute URL for a given path or page slug.
 */
function canonical_url(string $slug = ''): string {
    $canonicalDomain = rtrim(App::getInstance()->config()->get('canonical_domain', 'https://www.wonnegauer-designwerkstatt.de'), '/');
    $clean = trim($slug, '/');
    if ($clean === '' || $clean === 'index') {
        return $canonicalDomain . '/';
    }
    return $canonicalDomain . '/' . $clean;
}

/**
 * Safe HTML escaping helper.
 */
function e(?string $value): string {
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Renders a view file from the /views directory.
 * Passes $page into scope.
 */
function render_view(string $view, array $page): void {
    App::getInstance()->view()->render($view, $page);
}

/**
 * Checks whether the given slug is the currently active page.
 */
function is_active(string $slug): bool {
    global $page;
    $currentSlug = $page['slug'] ?? '';
    if ($currentSlug === '') {
        try {
            $currentSlug = App::getInstance()->getCurrentPage()['slug'] ?? '';
        } catch (\Throwable) {
            $currentSlug = '';
        }
    }
    return $currentSlug === $slug;
}

/**
 * Access a value from the global $config array using dot notation.
 */
function config(string $key, mixed $default = null): mixed {
    return App::getInstance()->config()->get($key, $default);
}

/**
 * Checks if Cloudflare Turnstile is enabled.
 */
function turnstile_enabled(): bool {
    return (bool) config('turnstile.enabled', false);
}

/**
 * Returns the Cloudflare Turnstile site key.
 */
function turnstile_site_key(): string {
    return (string) config('turnstile.site_key', '1x00000000000000000000AA');
}

/**
 * Renders an anti-scraping protected email link.
 * Raw HTML output contains no "mailto:" and no plain "@" symbol.
 * Visual output uses reversed text via CSS; hydration populates mailto on interaction or verification.
 */
function protected_email(string $email, ?string $label = null, string $classes = '', string $style = ''): string {
    $parts = explode('@', $email, 2);
    if (count($parts) !== 2) {
        return e($email);
    }
    $user = $parts[0];
    $domain = $parts[1];
    $display = $label ?? $email;
    $revDisplay = strrev($display);

    $encUser = base64_encode($user);
    $encDomain = base64_encode($domain);
    $encDisplay = base64_encode($display);

    $classAttr = 'protected-contact protected-email' . ($classes !== '' ? ' ' . e($classes) : '');
    $styleAttr = $style !== '' ? ' style="' . e($style) . '"' : '';

    return sprintf(
        '<a href="javascript:void(0)" class="%s"%s data-u="%s" data-d="%s" data-label="%s" data-type="email" rel="nofollow" title="E-Mail senden" aria-label="E-Mail-Adresse"><span class="c-rev"><span class="u-bot-trap" aria-hidden="true" style="display:none!important;">_spam-trap_</span>%s</span></a>',
        $classAttr,
        $styleAttr,
        e($encUser),
        e($encDomain),
        e($encDisplay),
        e($revDisplay)
    );
}

/**
 * Renders an anti-scraping protected phone link.
 * Raw HTML contains no "tel:" link; digits are reversed in HTML and styled via CSS until hydrated.
 */
function protected_phone(string $displayPhone, ?string $telNumber = null, ?string $label = null, string $classes = '', string $style = ''): string {
    $cleanTel = $telNumber ?? preg_replace('/[^\d+]/', '', $displayPhone);
    $displayText = $label ?? $displayPhone;
    $revDisplay = strrev($displayText);

    $encTel = base64_encode($cleanTel);
    $encDisplay = base64_encode($displayText);

    $classAttr = 'protected-contact protected-phone' . ($classes !== '' ? ' ' . e($classes) : '');
    $styleAttr = $style !== '' ? ' style="' . e($style) . '"' : '';

    return sprintf(
        '<a href="javascript:void(0)" class="%s"%s data-tel="%s" data-label="%s" data-type="phone" rel="nofollow" title="Anrufen" aria-label="Telefonnummer"><span class="c-rev"><span class="u-bot-trap" aria-hidden="true" style="display:none!important;">_spam-trap_</span>%s</span></a>',
        $classAttr,
        $styleAttr,
        e($encTel),
        e($encDisplay),
        e($revDisplay)
    );
}
