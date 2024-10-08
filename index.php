<?php
require_once __DIR__ . '/includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RuShop</title>
    <!-- ccs, bootstrap, icons -->
    <link rel="stylesheet" href="<?=baseUrl('/assets/css/style.css')?>">
    <link rel="stylesheet" href="<?=baseUrl('/assets/css/bootstrap/bootstrap.min.css')?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?=component('navbar');?>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <!-- Company Info -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-capitalize mb-4">RuShop.</h5>
                    <p class="small">
                        Kami menyediakan produk berkualitas tinggi dengan harga terjangkau. Kepuasan pelanggan adalah
                        prioritas utama kami.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-capitalize mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#" class="text-light text-decoration-none hover-underline">Beranda</a>
                        </li>

                        <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-underline">Produk</a>
                        </li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-underline">Tentang
                                Kami</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none hover-underline">Kontak</a>
                        </li>
                    </ul>
                </div>

                <!-- Customer Support -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-capitalize mb-4">Bantuan Pelanggan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#" class="text-light text-decoration-none hover-underline">
                                <i class="bi bi-question-circle me-2"></i>FAQ
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-light text-decoration-none hover-underline">
                                <i class="bi bi-truck me-2"></i>Informasi Pengiriman
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-light text-decoration-none hover-underline">
                                <i class="bi bi-arrow-return-left me-2"></i>Kebijakan Pengembalian
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-light text-decoration-none hover-underline">
                                <i class="bi bi-shield-check me-2"></i>Keamanan Belanja
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-capitalize mb-4">Kontak</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-geo-alt-fill me-2"></i>Jl. Ruquds No. 12, Jakarta, Indonesia
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-telephone-fill me-2"></i>+62 123 456 7890
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-envelope-fill me-2"></i>info@rushop.com
                        </li>
                    </ul>
                </div>

                <!-- Payment Methods -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-capitalize mb-4">Metode Pembayaran</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item me-3"><i class="bi bi-credit-card fs-3"></i></li>
                        <li class="list-inline-item me-3"><i class="bi bi-paypal fs-3"></i></li>
                        <li class="list-inline-item me-3"><i class="bi bi-bank fs-3"></i></li>
                        <li class="list-inline-item"><i class="bi bi-wallet2 fs-3"></i></li>
                    </ul>
                    <p class="small mt-2">Kami menerima berbagai metode pembayaran untuk kenyamanan Anda.</p>
                </div>
            </div>

            <!-- Social Media -->
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <h5 class="text-capitalize mb-4">Ikuti Kami</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="text-light fs-4">
                                <i class="bi bi-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-light fs-4">
                                <i class="bi bi-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-light fs-4">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-light fs-4">
                                <i class="bi bi-tiktok"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p class="small mb-0">&copy; 2024 RuShop. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>