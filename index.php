<?php
require_once __DIR__ . '/components/header.php';

if (!isset($_SESSION['user_id'])) {
    // Redirect jika user belum login
    header('Location: ' . baseUrl('/login'));
    exit;
}
?>

<?=component('navbar');?>

<div class="container">
    <?="Selamat datang, " . $_SESSION['user_name'];?>
</div>

<?php
require_once __DIR__ . '/components/footer.php';
?>