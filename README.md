# Sinam Lab

File Checker Application

## Daftar Isi
1. [Instalasi](#instalasi)
    - [Spesifikasi yang Dibutuhkan](#spesifikasi)
    - [Cara Install](#cara-install)

## Instalasi

### Spesifikasi
- PHP ^7.2
- Laravel 8
- NodeJS/NPM
- Database MySQL atau MariaDB
- SQlite (untuk `automated testing`)

### Cara Install

1. Clone atau download source code
    - Para terminal, clone repo `git clone https://github.com/nipengg/Sinam-Lab.git`
    - Jika tidak menggunakan Git, silakan **Download Zip** dan *extract* pada direktori web server (misal: xampp/htdocs)
    - Jika menggunakan laragon silakan extract pada direktori laragon/www
2. `cd **Nama direktori**`
3. `composer install`
4. `npm install` dan `npm run dev`
5. `cp .env.example .env`
    - Jika tidak menggunakan Git, bisa rename file `.env.example` menjadi `.env`
6. Pada terminal `php artisan key:generate`
7. Buat **database pada mysql** untuk aplikasi ini
8. **Setting database** pada file `.env`
9. `php artisan migrate --seed`
10. `php artisan serve`
11. Selesai
