# E-Learning Task – Backend (Laravel API)

This project is the backend API for the E-Learning task.  
It is built using **Laravel** and provides:

- News & Testimonials APIs
- Careers submission with CV upload
- Admin panel to manage all data

---

## Requirements

- PHP 8+
- Composer
- MySQL (XAMPP or similar)

---

## Installation Steps

### 1. Install dependencies
```bash
composer install

# 2.Copy environment file
cp .env.example .env
php artisan key:generate

# 3.Configure database in .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=elearning_task
DB_USERNAME=root
DB_PASSWORD=

# 4. Run migrations and seeders
php artisan migrate --seed

# 5. Start the server
php artisan serve

#Backend will run on:
http://127.0.0.1:8000


#Admin Panel
#Login using the seeded admin credentials
http://127.0.0.1:8000/admin

# Related Frontend Repository
#Angular frontend project:
➡ https://github.com/RawanTarabsheh/Elearning-Frontend-Task-Angular-.git


