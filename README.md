# Laravel CMS

This is a CMS to deploy and use for building website. Its fast pace and easy installation is good to use in freelance!

### Add-ons in this CMS:

- [x] Backpack CRUD
- [x] Menu CRUD
- [x] Log Manager
- [x] Page Manager
- [x] Permission Manager
- [x] Settings for Website

### DIY menu for this CMS:

- [x] Pages SEO

### Basic users and settings:

- [x] Seeded webmaster, admin and user roles
- [x] Basic permissions for website

## Getting started

1. Make sure you have `composer` in your computer. ([click here](https://getcomposer.org/download/) for installation guide)
2. Run `composer install` in your terminal.
3. Copy `.env.example` file to make a `.env` file. Fill in neccessary information inside.

    ```
      DB_DATABASE, DB_USERNAME, DB_PASSWORD, BACKPACK_ADMIN_NAME, BACKPACK_ADMIN_EMAIL, BACKPACK_ADMIN_PASSWORD
    ```
4. Run `mysql -u <USER> -p -e "CREATE DATABASE <DATABASE_NAME_IN_DOT_ENV_FILE>"` to create database.
5. Run `php artisan migrate` in your terminal.
6. Run `php artisan seed` to create users, roles and permissions to your database.
7. Run `php artisan key:generate` to generate key for your application.

## Run your server in local

`php artisan serve`

## Debug and console

`php artisan tinker`

#### Sometimes class didn't find, please use `composer dump-autoload` to refresh and read new files.

## Future implementation

Nothing yet.
