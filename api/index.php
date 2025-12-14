<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

// Default page
if ($uri === '' || $uri === 'index') {
    require __DIR__ . '/../index.php';
    exit;
}

// Remove .php extension if present
$uri = preg_replace('/\.php$/', '', $uri);

$file = __DIR__ . '/../' . $uri . '.php';

if (file_exists($file)) {
    require $file;
    exit;
}

// 404
http_response_code(404);
echo "404 - Page not found";
