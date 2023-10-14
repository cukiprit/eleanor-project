# Project Eleanor

## Penjelasan aplikasi

Project eleanor merupakan website rekap data produk dari eleanor dimana pada website ini menyediakan fitur untuk membuat rekap data barang masuk maupun keluar dan juga dapat menambahkan, mengubah, maupun menghapus produk.

## Cara penggunaan

Ketika pertama kali mendownload project ini jangan lupa untuk melakukan `composer install` untuk menginstall dependency yang dibutuhkan. Ketika ingin melakukan maintenance jangan lupa untuk mengubah `CI_ENVIRONMENT` pada file `.env` menjadi `development` dan apabila websitenya akan digunakan pada tahap produksi rubahlah menjadi `production`

Apabila pada file project tidak ditemukan file `.env` silahkan rename file `env` menjadi `.env`

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
