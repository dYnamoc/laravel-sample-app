# Laravel Sample App

This is a simple **Laravel sample application** showcasing:

- Basic CRUD operations (create, read, update, delete)
- REST API for posts
- Form validation
- Blade views
- Eloquent models & migrations

The goal of this project is to demonstrate my familiarity with **Laravel**, clean code structure and typical web application patterns.

> This is not a production-ready project. It’s a small demo for portfolio purposes.

---

## Features

- Manage posts with title + content
- Web interface with Blade templates
- REST API endpoints for posts (`/api/posts`)
- Request validation
- Basic layout & flash messages

---

## Tech Stack

- PHP
- Laravel
- Blade templates
- SQLite (for simplicity)

---

## Installation (local)

```bash
git clone https://github.com/<your-user>/laravel-sample-app.git
cd laravel-sample-app

composer install
cp .env.example .env

php artisan key:generate

# Use sqlite for simplicity
touch database/database.sqlite
