# Laravel POS Foundations

This project implements the IT0049 TFA5 requirements: a landing page, an about page, a customer accounts page, and a user accounts page.

## Pages

- `/` - landing page
- `/about` - MVC explanation
- `/customers` - customer records from a static PHP array
- `/users` - user records from a static PHP array

## Installation

Create a fresh Laravel application first:

```bash
composer create-project laravel/laravel pos-foundations
```

Copy the folders in this repository into the fresh Laravel application, allowing the provided files to replace the default files. Then run:

```bash
php artisan migrate:fresh --seed --seeder=PosReferenceSeeder
php artisan serve
```

Open http://127.0.0.1:8000 in a browser.

## Required checks

```bash
php artisan route:list
php artisan migrate:status
```

The account pages retrieve records through the `Customer` and `User` Eloquent models. The database schema matches TFA2: `customers` contains `full_name`, `email`, and `phone`; `users` contains a unique `username` and `full_name`.

## Submission checklist

- Push the complete Laravel project to GitHub.
- Add the GitHub repository URL to the submission.
- Deploy the project to a supported PHP host and add the live URL.
- Test all four routes before submitting.
