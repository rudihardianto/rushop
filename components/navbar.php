<nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?=baseUrl()?>">RuShop.</a>
        <div class="d-flex gap-3 align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- dropdown cart -->
            <?=component('cart', ['dropdownClass' => 'dropdown d-md-none']);?>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-underline mx-auto gap-md-3">
                <li class="nav-item">
                    <a class="nav-link <?=isActive('/')?>" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=isActive('features')?>" href="/features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=isActive('pricing')?>" href="/pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=isActive('register')?>" href="<?=baseUrl('/register')?>">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?=isActive('login')?>" href="<?=baseUrl('/login')?>">login</a>
                </li>
            </ul>
            <div class="d-flex justify-content-end">
                <!-- dropdown cart -->
                <?=component('cart', ['dropdownClass' => 'dropdown d-none d-sm-block']);?>
            </div>
        </div>
    </div>
</nav>