# API-CALL

## Author
ARMEL MEINARD Y. CRUZ 
III - BSIT - B

---

# Project Setup Guide

Welcome! Follow the steps below to get the project up and running on your local machine after cloning.

---

Prerequisite

Please Make sure you have this following
- **PHP** (version 8.0 or above )
- **Composer**
- **Laravel**
- **MySQL**
- **Postman** (for API testing)

---

##  Getting Started

### 1. Install Dependencies

After cloning the repository, install all PHP dependencies via Composer:

```bash
composer install
```

---

### 2. Set Up Environment File

Copy the example environment file and rename it to `.env`:

```terminal
copy .env.example .env
```

Then open the `.env` file and configure your environment variables (database credentials, app URL, etc.) according to your local setup.

---

### 3. Generate Application Key

```terminal
php artisan key:generate
```

---

### 4. Run Database Migrations

Create all the necessary database tables by running:

```terminal
php artisan migrate
```

---

### 5. Seed the Database

Populate the database with initial data so you have something to work with when testing the API in Postman:

```terminal
php artisan db:seed
```

---

## You're All Set!

That's it — the project should now be fully set up and ready to use. Enjoy exploring the API! 🎉

---

## 🎬 API Video Demo

Check out the video demo for a walkthrough of the API endpoints:

👉 [Watch the Demo](https://drive.google.com/drive/folders/15MNabfxbUZTWBNJaNBQgLRYARQwYEGqj)
