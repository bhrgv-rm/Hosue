<?php
// Parse the requested URI path
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');

// Default page: /, /index, /southwoods
if ($uri === '' || $uri === 'index' || $uri === 'southwoods') {
    require __DIR__ . '/../index.php';
    exit;
}

// Remove .php extension if present
$uri = preg_replace('/\.php$/', '', $uri);

// Build the file path relative to project root
$file = __DIR__ . '/../' . $uri . '.php';

// Serve the file if it exists
if (is_file($file)) {
    require $file;
    exit;
}

// 404 response if file not found
http_response_code(404);
echo "404 - Page not found";
