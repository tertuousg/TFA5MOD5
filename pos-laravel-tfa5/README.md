# POS Account Management System - Laravel TFA5

Student: Paul Terence Guadalupe  
Section: TC33  
Course: IT0049 - Web System Technologies

## Overview
Four-page Laravel POS account management demonstration. Customer and user lists each use a static PHP array with five records, passed from a controller to a Blade view. No database is used for these pages.

## Requirements
- PHP and Composer compatible with your Laravel version
- Laravel installer optional

## Installation
1. Create a fresh Laravel application: `composer create-project laravel/laravel pos-laravel`
2. Enter the project: `cd pos-laravel`
3. Copy the `app/Http/Controllers`, `resources/views`, and `routes/web.php` files from this ZIP into the corresponding folders of the fresh Laravel project. Replace the generated `routes/web.php`.
4. Run `php artisan route:list` to verify the four GET routes.
5. Run `php artisan serve`.
6. Open `http://127.0.0.1:8000` and test `/`, `/about`, `/customers`, `/users`.

## Routes
| URL | Controller method | Blade view |
| --- | --- | --- |
| `/` | PageController@home | home.blade.php |
| `/about` | PageController@about | about.blade.php |
| `/customers` | CustomerController@index | customers.blade.php |
| `/users` | UserController@index | users.blade.php |

## Notes
This ZIP contains only the project-specific files, not the Laravel framework, `vendor`, `.env`, or dependencies. Generate a new Laravel project before copying these files. For hosting, deploy the completed Laravel project to a PHP-capable host, configure its web root to `public`, and set production environment variables securely. Never commit your `.env` file or `vendor` folder to GitHub.

## TFA5 Submission
- GitHub link to the complete Laravel project with README.
- Live hosted link.
- The assignment also mentions database export or migration/seeder files. Because the instructed pages use static arrays, clarify with your instructor whether the default Laravel migrations are sufficient or a separate database deliverable is required.
