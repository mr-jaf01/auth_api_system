# Project Setup Guide

This guide will walk you through the steps to clone and set up the **Laravel 11 Authentication API ** \*\* on your local machine.

## Prerequisites

Before starting, make sure you have the following software installed:

-   [Git](https://git-scm.com/) (for cloning the repositories)
-   [PHP 8.0+](https://www.php.net/downloads.php) (for Laravel)
-   [Composer](https://getcomposer.org/) (for managing Laravel dependencies)
-   [Node.js and npm](https://nodejs.org/) (for ReactJS)
-   [sQLiTe or any other preferred database]()

## Backend Setup (Laravel 11)

### 1. Clone the Backend Repository

First, clone the Laravel backend repository to your local machine.

git clone https://github.com/mr-jaf01/auth_api_system.git
cd auth_api_system

-   2. Install Backend Dependencies
       Install the necessary PHP dependencies using Composer.

        composer install

-   3. Set Up Environment File
       Copy the .env.example file to .env and set up your environment variables (such as database connection, app key, etc.).

        cp .env.example .env

-   4. Generate Application Key
       Generate the Laravel application key.
       php artisan key:generate

-   5. Set Up Database
       The default DB is SQLite

-   6. Run Migrations and Seeders
       If your project has migrations and seeders, run the following command to set up the database schema and data:

    php artisan migrate --seed 7. Serve the Laravel Application

-   Start the Laravel server:

    php artisan serve

-   The backend should now be running at http://127.0.0.1:8000.
