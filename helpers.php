<?php

use App\Core\App;

/**
 * Returns the base URL with an optional path appended.
 */
function url(string $path = ''): string {
    $base = rtrim(App::getInstance()->config()->get('base_url', ''), '/');
    return $base . '/' . ltrim($path, '/');
}

/**
 * Renders a view file from the /views directory.
 * Passes $page and $config into scope.
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
