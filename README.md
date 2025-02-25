

# Laravel User and Payment managemnet system

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About the Project

This project is a **CRUD application** built for **Mr. Market NEPSE**, which helps to manage users and payments. The project uses **Laravel** as the backend framework, **Bootstrap** for the UI, and **MySQL** for the database.

### Technologies Used
- **Backend**: Laravel (with authentication using `laravel/ui` package)
- **Frontend**: Bootstrap 4/5 for UI
- **Database**: MySQL
- **Authentication**: Laravel's built-in authentication system with Bootstrap UI for styling.

### Features
- **User Management**: Add, edit, delete, and list users with authentication (password hashing).
- **Payment Management**: Add, edit, delete, and list payments for users (linked to `users` table).
- **Payment Type**: Supports `Khalti`, `Esewa`, and `Bank` payment methods.
- **Next Renewal Date**: Automatically calculates the next renewal date based on payment date.
- **LogOut**: gives the logout functionality.
  
## Installation Instructions

1. **Clone the repository**:

    ```bash
    git clone https://github.com/low-key19/Laravel-user-and-payment-management.git
    cd Laravel-user-and-payment-management
    ```

2. **Install dependencies**:

    If you are using **Composer** (which is required for Laravel):

    ```bash
    composer install
    ```

3. **Set up environment**:

    Copy `.env.example` to `.env`:

    ```bash
    cp .env.example .env
    ```

4. **Generate application key**:

    ```bash
    php artisan key:generate
    ```

5. **Set up the database**:

    - Update `.env` with your database details.
    - Run migrations to set up the database schema:

    ```bash
    php artisan migrate
    ```

6. **Start the server**:

    ```bash
    php artisan serve
    ```

    This will start the application at `http://127.0.0.1:8000`.

## Usage

- **Authentication**: You can log in or register users via the Laravel authentication system.
- **Manage Users**: Navigate to the Users page via the dashboard to manage users.
- **Manage Payments**: Navigate to the Payments page to manage payments and view payment history.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
