<?php

require_once __DIR__ . '/components.php';

function baseUrl($path = '', $secure = null)
{
    $is_production = getenv('APP_ENV') === 'production';
    $is_https      = $is_production || ($secure ?? (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'));
    $domain        = getenv('APP_DOMAIN') ?: 'dry_laundry.test';
    $base_url      = ($is_https ? "https://" : "http://") . $domain;

    return rtrim($base_url, '/') . '/' . ltrim($path, '/');
}
