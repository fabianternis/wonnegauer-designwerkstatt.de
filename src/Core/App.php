<?php

namespace App\Core;

class App
{
    private static App $instance;
    private Config $config;
    private Router $router;
    private View $view;

    public function __construct(array $configData)
    {
        $this->config = new Config($configData);
        $this->router = new Router($this->config);
        $this->view = new View($this->config);
        self::$instance = $this;
    }

    public static function getInstance(): App
    {
        return self::$instance;
    }

    public function run(): void
    {
        try {
            $page = $this->router->resolve();
            $this->view->renderLayout($page);
        } catch (\Throwable $e) {
            $this->handleError($e);
        }
    }

    private function handleError(\Throwable $e): void
    {
        http_response_code(500);
        $page = [
            'title'       => 'Serverfehler',
            'description' => '',
            'view'        => '500',
            'slug'        => '500',
        ];
        $this->view->renderLayout($page);
    }

    public function config(): Config
    {
        return $this->config;
    }

    public function view(): View
    {
        return $this->view;
    }
}
