<?php
// Asumsikan Anda memiliki fungsi untuk memeriksa status login
function isLoggedIn()
{
    // Implementasi logika untuk memeriksa apakah pengguna sudah login
    return isset($_SESSION['user_id']);
}

?>

<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?=baseUrl()?>">RuShop.</a>

        <!-- Toggler and Cart Button for Mobile -->
        <div class="d-flex align-items-center gap-3">
            <?php if (isLoggedIn()): ?>
            <!-- dropdown cart for mobile -->
            <div class="d-md-none">
                <?=component('cart', ['dropdownClass' => 'dropdown']);?>
            </div>
            <?php endif;?>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Navbar Links and Auth Section -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto gap-md-3">
                <li class="nav-item">
                    <a class="nav-link <?=isActive('/')?>" href="<?=baseUrl()?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=isActive('features')?>" href="/features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=isActive('pricing')?>" href="/pricing">Pricing</a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-3">
                <?php if (!isLoggedIn()): ?>
                <a class="btn btn-outline-primary <?=isActive('login')?>" href="<?=baseUrl('/login')?>">Login</a>
                <a class="btn btn-primary <?=isActive('register')?>" href="<?=baseUrl('/register')?>">Register</a>
                <?php else: ?>
                <!-- dropdown cart for desktop -->
                <div class="d-none d-md-block">
                    <?=component('cart', ['dropdownClass' => 'dropdown']);?>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</nav>