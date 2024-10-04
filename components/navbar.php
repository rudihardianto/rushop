<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">RuShop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto gap-3">
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
            <div class="d-flex align-items-center">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle text-decoration-none text-dark" id="cartDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        <span class="badge bg-danger">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cartDropdown" style="width: 300px;">
                        <li>
                            <h6 class="dropdown-header">Keranjang Belanja</h6>
                        </li>
                        <li class="dropdown-item d-flex align-items-center">
                            <img src="https://via.placeholder.com/50" alt="Produk 1" class="me-2" width="50">
                            <div class="flex-grow-1">
                                <small>Produk 1</small><br>
                                <span class="text-muted">2 pcs - Rp 100.000</span>
                            </div>
                            <span>Rp 200.000</span>
                        </li>
                        <li class="dropdown-item d-flex align-items-center">
                            <img src="https://via.placeholder.com/50" alt="Produk 2" class="me-2" width="50">
                            <div class="flex-grow-1">
                                <small>Produk 2</small><br>
                                <span class="text-muted">1 pcs - Rp 150.000</span>
                            </div>
                            <span>Rp 150.000</span>
                        </li>
                        <li class="dropdown-item d-flex align-items-center">
                            <img src="https://via.placeholder.com/50" alt="Produk 3" class="me-2" width="50">
                            <div class="flex-grow-1">
                                <small>Produk 3</small><br>
                                <span class="text-muted">3 pcs - Rp 200.000</span>
                            </div>
                            <span>Rp 600.000</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Lihat Keranjang</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>