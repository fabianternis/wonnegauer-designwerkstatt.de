<?php

namespace App\Core;

class App
{
    private static ?App $instance = null;
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
        if (self::$instance === null) {
            throw new \RuntimeException('App has not been initialized.');
        }
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
        if (!headers_sent()) {
            http_response_code(500);
        }
        $page = [
            'title'       => 'Serverfehler',
            'description' => 'Es ist ein interner Serverfehler aufgetreten.',
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
