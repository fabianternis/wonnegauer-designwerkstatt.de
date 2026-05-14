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
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $uri = rtrim($uri, '/');
        $uri = $uri === '' ? '/' : $uri;

        $slug = ltrim($uri, '/');
        $slug = $slug === '' ? 'index' : $slug;

        $pages = $this->config->get('pages', []);

        if (isset($pages[$slug])) {
            return array_merge($pages[$slug], ['slug' => $slug]);
        }

        http_response_code(404);
        return [
            'title'       => 'Seite nicht gefunden',
            'description' => '',
            'view'        => '404',
            'slug'        => '404',
        ];
    }
}
