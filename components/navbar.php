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
            <?php if (!isLoggedIn()): ?>
            <!-- dropdown cart for mobile -->
            <div class="d-md-none">
                <?=component('cart');?>
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
                <a class="btn btn-sm btn-outline-primary <?=isActive('login')?>" href="<?=baseUrl('/login')?>">
                    Login
                </a>
                <a class="btn btn-sm btn-primary <?=isActive('register')?>" href="<?=baseUrl('/register')?>">
                    Register
                </a>
                <?php else: ?>
                <!-- dropdown cart for desktop -->
                <div class="d-none d-md-block">
                    <?=component('cart');?>
                </div>

                <!-- Profile Dropdown -->
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="path/to/profile.jpg" alt="Profile" width="30" height="30" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dropdown-menu-sm-start dropdown-menu-md-end shadow mt-md-3"
                        aria-labelledby="dropdownUser">
                        <li><a class="dropdown-item" href="<?=baseUrl('/settings')?>">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?=baseUrl('/logout')?>">Logout</a></li>
                    </ul>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</nav>