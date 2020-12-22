<h1 align="center">Selamat datang di Ticket! 👋</h1>

## Apa itu Ticket?

Web Ticket yang dibuat oleh <a href="https://github.com/adhiariyadi"> Adhi Ariyadi </a>. **Ticket adalah Website untuk pemesanan ticket dengan mudah melalui website.**

## Fitur apa saja yang tersedia di Ticket?

-   Autentikasi Admin
-   User & CRUD
-   Rute & CRUD
-   Transportasi & CRUD
-   Category & CRUD
-   Pemesanan Ticket
-   Dan lain-lain

## Release Date

**Release date : 28 Apr 2020**

> Ticket merupakan project open source yang dibuat oleh Adhi Ariyadi. Kalian dapat download/fork/clone. Cukup beri stars di project ini agar memberiku semangat. Terima kasih!

---

## Default Account for testing

**Admin Default Account**

-   username: admin
-   Password: admin123

---

## Install

1. **Clone Repository**

```bash
git clone https://github.com/adhiariyadi/Ticket-Laravel.git
cd Ticket-Laravel
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan website**

```bash
php artisan serve
```

## Author

-   Facebook : <a href="https://web.facebook.com/adhiariyadi.me/"> Adhi Ariyadi</a>
-   LinkedIn : <a href="https://www.linkedin.com/in/adhiariyadi/"> Adhi Ariyadi</a>

## Contributing

Contributions, issues and feature requests di persilahkan.
Jangan ragu untuk memeriksa halaman masalah jika Anda ingin berkontribusi. **Berhubung Project ini saya sudah selesaikan sendiri, namun banyak fitur yang kalian dapat tambahkan silahkan berkontribusi yaa!**

## License

-   Copyright © 2020 Adhi Ariyadi.
-   **Ticket is open-sourced software licensed under the MIT license.**
