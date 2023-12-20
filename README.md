
# OpenHouse Management Project

Welcome to the OpenHouse Management Project! This project is designed to help you manage and organize Final Year Project Evaluations efficiently.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Project Management:** Easily manage and organize Final Year Project Evaluations.
- **User Roles:** Different roles for students, evaluators, and administrators.
- **Dashboard:** Intuitive dashboards for each user role.

## Installation

To get started with the OpenHouse Management Project, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/openhouse-management.git
   ```
2. **Open the code in a Code Editor:**
   Open the code folder in a code editor such as Visual Studio Code.
   

4. **Install dependencies:**
   ```
   composer install
   ```

5. **Configure the environment:**
   - Copy the `.env.example` file to `.env` and configure the database connection and other settings.
   - Generate the application key:
     ```
     php artisan key:generate
     ```
  - **Database Setup:** You need a XAMPP server for this (Download here: https://www.apachefriends.org/index.html), before you create tables within the database and seed it, you need to start your XAMPP server (Apache, MySQL), create a database called openhouse_management_project(or any other as per your preference) and add details to the .env file.
6. **Run Migrations and Seed Database:**
   ```
    php artisan migrate:refresh --seed
   ```

## Usage

1. **Run the development server:**
   ```
   php artisan serve
   ```
   Visit [http://localhost:8000](http://localhost:8000) in your web browser.
   You will be presented with the Login Page. Use Credentials from users table (can be viewed by navigating to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/) in the Database to Login.

2. **Explore the Dashboard:**
   - Explore the features based on your user role.
   - Create projects, assign tables, and manage open house details.
