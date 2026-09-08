# Library System

## Description

Simple Library Information System built using Laravel and MySQL.

This project was created as part of the Laravel Environment Setup assignment.

## Requirements

- PHP
- Composer
- MySQL
- Laravel
- Git

## Installation

1. Clone the repository

   ```bash
   git clone https://github.com/2410631250110-a11y/library-system.git
   ```

2. Enter the project directory

   ```bash
   cd library-system
   ```

3. Install dependencies

   ```bash
   composer install
   ```

4. Copy the environment file

   ```bash
   copy .env.example .env
   ```

5. Generate application key

   ```bash
   php artisan key:generate
   ```

6. Configure the database in the `.env` file

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=library_system
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. Run the database migration

   ```bash
   php artisan migrate
   ```

8. Run the Laravel application

   ```bash
   php artisan serve
   ```

9. Open the application in the browser

   ```text
   http://127.0.0.1:8000
   ```

## Author

Salman Al Farisi  
NIM: 2410631250110