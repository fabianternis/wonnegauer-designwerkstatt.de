<?php

use App\Core\App;

/**
 * Returns the base URL with an optional path appended.
 * Includes automatic cache busting.
 */
function url(string $path = ''): string {
    $base = rtrim(App::getInstance()->config()->get('base_url', ''), '/');
    $fullPath = $base . '/' . ltrim($path, '/');
    
    // Fix: Use __DIR__ to point to the correct public directory
    $filePath = __DIR__ . '/public/' . ltrim($path, '/');
    
    if (!empty($path) && file_exists($filePath) && !is_dir($filePath)) {
        $version = filemtime($filePath);
        $fullPath .= '?v=' . $version;
    }
    
    return $fullPath;
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
    return ($page['slug'] ?? '') === $slug;
}

/**
 * Access a value from the global $config array using dot notation.
 */
function config(string $key, mixed $default = null): mixed {
    return App::getInstance()->config()->get($key, $default);
}
