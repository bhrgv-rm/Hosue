<?php

// Get requested path
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove leading slash
$uri = ltrim($uri, '/');

// Default page
if ($uri === '' || $uri === 'index') {
    require __DIR__ . '/../index.php';
    exit;
}

// If file exists, load it
$file = __DIR__ . '/../' . $uri . '.php';

if (file_exists($file)) {
    require $file;
    exit;
}

// 404 fallback
http_response_code(404);
echo "404 - Page not found";
