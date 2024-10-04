# rushop

website toko online (php native)

# rushop

**rushop** adalah sebuah website toko online yang dibangun menggunakan PHP Native.

## Fitur

-   Katalog Produk
-   Keranjang Belanja
-   Proses Checkout
-   Pencarian Produk
-   Panel Admin
-   Sistem Autentikasi

## Teknologi yang Digunakan

-   PHP
-   MySQL
-   HTML/CSS/JavaScript
-   Bootstrap (untuk tampilan responsif)

## Persyaratan Sistem

-   PHP 8.3+
-   MySQL 8.3+
-   Web server (Apache/Nginx)

## Instalasi

1. Clone repositori:

    ```
    git clone https://github.com/username/rushop.git
    ```

2. Impor `rushop.sql` ke MySQL

3. Konfigurasi `config.php`:

    ```php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'username');
    define('DB_PASS', 'password');
    define('DB_NAME', 'rushop');
    ```

4. Akses: `http://rushop.test` atau `http://localhost/rushop`, ubah pada folder `includes/functions.php`

## Struktur Direktori

```
rushop/
├── admin/
├── assets/
├── includes/
├── products/
├── user/
├── config.php
├── functions.php
└── index.php
```

## Penggunaan

-   Halaman utama: browsing dan pembelian
-   Panel admin: `/admin`
-   Akun default admin:
    -   Username: admin
    -   Password: password

## Kontribusi

Fork repositori dan buat pull request untuk kontribusi.

## Lisensi

[MIT License](LICENSE)

## Kontak

rud.hardianto@gmail.com
