<?php

/**
 * Utility script to download favicons locally for privacy-friendly serving.
 * Run this script to update the local favicon cache.
 */

// Simple autoloader for Config/App if needed, but we can just require the config file
$config = require __DIR__ . '/config.php';
$links = $config['pages']['links']['items'] ?? [];

$targetDir = __DIR__ . '/public/assets/img/favicons';
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
}

echo "Starting favicon download...\n";

foreach ($links as $item) {
    $url = $item['url'];
    $domain = parse_url($url, PHP_URL_HOST);
    if (!$domain) continue;

    $filename = $domain . '.png';
    $targetPath = $targetDir . '/' . $filename;

    echo "Processing {$domain}... ";

    // Privacy-friendly way: fetch server-side
    // We try to get the favicon from a few common locations or just use a fallback service 
    // BUT we download it once and serve it locally.
    
    // Using a service ONLY during this build/maintenance step is fine as it doesn't track the end-user.
    // However, if we want to be 100% Google-free even in dev, we can use duckduckgo or similar.
    $sourceUrl = "https://icons.duckduckgo.com/ip3/{$domain}.ico";
    
    $content = @file_get_contents($sourceUrl);
    if (!$content) {
        // Try direct root favicon
        $content = @file_get_contents("https://{$domain}/favicon.ico");
    }

    if ($content) {
        file_put_contents($targetPath, $content);
        echo "Done.\n";
    } else {
        echo "Failed.\n";
    }
}

echo "Finished.\n";
