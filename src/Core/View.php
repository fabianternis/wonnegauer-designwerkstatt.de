<?php

namespace App\Core;

class View
{
    private Config $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function render(string $view, array $data = []): void
    {
        $page = $data;
        $config = $this->config->all();

        // Extract data to make it available in the view
        extract($data);

        $viewPath = dirname(__DIR__, 2) . '/views/' . $view . '.php';

        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            echo '<p>View "' . htmlspecialchars($view) . '" nicht gefunden.</p>';
        }
    }

    public function renderLayout(array $page): void
    {
        $config = $this->config->all();
        include dirname(__DIR__, 2) . '/views/layout.php';
    }
}
