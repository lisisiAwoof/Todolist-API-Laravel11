<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 📑 To-Do List Backend API
🇬🇧 [Eng]

This project is a backend API for a multi-user To-Do list application. It allows users to register, log in, and manage their tasks. The API supports full CRUD (Create, Read, Update, Delete) functionality and restricts task access based on the authenticated user. The project is built using Laravel 11, MySQL for database management, and Postman for API testing.

🇮🇩 [Ind]

Proyek ini adalah API backend untuk aplikasi daftar tugas multi-pengguna. API ini memungkinkan pengguna untuk mendaftar, masuk, dan mengelola tugas-tugas mereka. API ini mendukung fungsionalitas CRUD (Create, Read, Update, Delete) / (Buat, Baca, Perbarui, Hapus) dan membatasi akses tugas berdasarkan pengguna yang diautentikasi. Proyek ini dibangun menggunakan Laravel 11, MySQL untuk manajemen basis data, dan Postman untuk pengujian API.


## 📊 Features
🇬🇧 [Eng]
- Multi-user authentication using Laravel Sanctum.
- Task management (CRUD operations).
- Display tasks specific to the currently authenticated user.
- API endpoints for registering, logging in, managing tasks.
- JSON responses for easy integration with frontend applications or Postman.

🇮🇩 [Ind]
- Otentikasi multi-pengguna menggunakan Laravel Sanctum.
- Manajemen tugas (operasi CRUD).
- Menampilkan tugas khusus untuk pengguna yang sedang diautentikasi.
- Titik akhir API untuk mendaftar, masuk, mengelola tugas.
- Respons JSON untuk integrasi yang mudah dengan aplikasi frontend atau Postman.


## 💻 Technologies Used
- **Laravel 11**: Backend framework.
- **MySQL**: Relational database management.
- **Postman**: API testing tool.
- **Laravel Sanctum**: Authentication middleware for securing API routes.

## 📥 Installation 
follow these steps if you want to try it at home for yourself (locally) 😎
1. Clone the repository:
   ```
   git clone https://github.com/your-username/todolist-backend.git
   cd todolist-backend
2. Install dependencies:
   ```
   composer install
3. Set up environment (Copy .env)
   ```
   cp .env.example .env
4. Configure database
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
5. Run migration
   ```
   php artisan migrate
6. Run the application
   ```
   php artisan serve
## 🔚 API Endpoints
### Authentication
- Register: **POST** http://127.0.0.1:8000/api/register
- Login: **POST** http://127.0.0.1:8000/api/login
- Logout: **POST** http://127.0.0.1:8000/api/logout
- User check: **GET** http://127.0.0.1:8000/api/user?Accept=application/json
  
### Todolist Management (requires token)
Tokens will be provided after you managed to login. After that you can insert the token in the Authorization menu and choose the Bearer Token option.
- Create: **POST** http://127.0.0.1:8000/api/todos
- Read: **GET** http://127.0.0.1:8000/api/todos
- Update: **PUT** http://127.0.0.1:8000/api/todos{id}
- Delete **DELETE** http://127.0.0.1:8000/api/todos{id}

## 📝 My Documentation (API Testing in Postman)
You can see screenshots of what i did here [Todolist API Gdocs](https://docs.google.com/document/d/1XJxm__pBvLS10gG2YPKbtRjO8gbF3rA1fSQMieWh-wM/edit?usp=sharing). 
Terima kasih 🩷

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
