<?php

require_once __DIR__ . '/connect-database.php';
require_once __DIR__ . '/components.php';

function baseUrl($path = '', $secure = null)
{
    $is_production = getenv('APP_ENV') === 'production';
    $is_https      = $is_production || ($secure ?? (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'));
    $domain        = getenv('APP_DOMAIN') ?: 'rushop.test';
    $base_url      = ($is_https ? "https://" : "http://") . $domain;

    // Remove file extension if it's .php
    $path = preg_replace('/\.php$/', '', $path);

    // Add .php extension if the file exists
    $full_path = $_SERVER['DOCUMENT_ROOT'] . '/' . ltrim($path, '/') . '.php';
    if (file_exists($full_path)) {
        $path .= '.php';
    }

    return rtrim($base_url, '/') . '/' . ltrim($path, '/');
}

function isActive($route)
{
    $currentUrl = trim($_SERVER['REQUEST_URI'], '/');

    return $currentUrl === trim($route, '/') ? 'active fw-semibold underline' : '';
}