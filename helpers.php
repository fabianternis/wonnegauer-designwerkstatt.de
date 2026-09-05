<?php

use App\Core\App;

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
