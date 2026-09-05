<?php

namespace App\Core;

class Router
{
    private Config $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function resolve(): array
    {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $uri = strtok($uri, '?');
        $uri = rtrim($uri, '/');
        $uri = $uri === '' ? '/' : $uri;

        $slug = ltrim($uri, '/');
        $slug = $slug === '' ? 'index' : $slug;

        $pages = $this->config->get('pages', []);

        if (isset($pages[$slug])) {
            return array_merge($pages[$slug], ['slug' => $slug]);
        }

        if (!headers_sent()) {
            http_response_code(404);
        }
        return [
            'title'       => 'Seite nicht gefunden',
            'description' => 'Die gesuchte Seite existiert leider nicht oder wurde verschoben.',
            'view'        => '404',
            'slug'        => '404',
        ];
    }
}
