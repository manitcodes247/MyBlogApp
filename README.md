# MyBlogApp - Simple CMS

## Project Overview
MyBlogApp is a simple **Content Management System (CMS)** built with **Laravel (PHP)** that allows admins to manage blog articles. The system includes authentication for admins, article management in the admin panel, and a public-facing view of articles.

---

## Features

### 1. Authentication
- Admin login page (username & password).  
- Only logged-in admins can access the CMS dashboard.

### 2. Admin Panel
- List all articles with **Edit** and **Delete** buttons.  
- **Add New Article** form to create articles.  
- **Edit Article** form to update articles.  
- Delete confirmation before removing an article.

### 3. Public View
- Display all articles in a simple list showing **title** and **content snippet**.  
- Clicking a title opens the full article on its own page.

---

## Requirements
- PHP >= 8  
- MySQL >= 8  
- Composer  
- XAMPP or any local server setup  

---

## Installation Steps

1. **Clone the repository (or unzip)**

```bash
git clone <YOUR_REPOSITORY_URL>
cd MyBlogApp

2. Install dependencies

composer install
npm install
npm run dev   # if using frontend assets

3. Copy .env file

cp .env.example .env

4. Update database credentials in .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=myblogapp
DB_USERNAME=root
DB_PASSWORD=

5. Import the database

Via phpMyAdmin:
- Create a database myblogapp
- Import myblogapp.sql from the project folder

Or via command line:
- mysql -u root -p myblogapp < myblogapp.sql

6. Generate application key

php artisan key:generate

7. Run the project

php artisan serve
Open http://127.0.0.1:8000 in your browser

8. Admin Access

Use the credentials you created via the registration page to log in as an admin.
Only admins can access the dashboard (/articles).
