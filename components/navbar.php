<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">RuShop</a>
        <div class="d-flex gap-3 align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- dropdown cart -->
            <?=component('dropdown-cart', ['dropdownClass' => 'dropdown d-md-none']);?>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto gap-md-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            <div class="d-flex justify-content-end">
                <!-- dropdown cart -->
                <?=component('dropdown-cart', ['dropdownClass' => 'dropdown d-none d-sm-block']);?>
            </div>
        </div>
    </div>
</nav>