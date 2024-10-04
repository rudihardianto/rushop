<?php
require_once __DIR__ . '/components.php';

function url($url = null)
{
    $url_utama = "http://dry_laundry.test";
    if ($url != null) {
        return $url_utama.'/'.$url;
    } else {
        return $url_utama;
    }
}

// baseUrl
define("base_url", "http://rushop.test");

?>