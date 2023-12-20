
# OpenHouse Management Project

Welcome to the OpenHouse Management Project! This project is designed to help you manage and organize Final Year Project Evaluations efficiently.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Insights](#insights)

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

## Insights
- **Centralized Project Management:** The platform provides a centralized system for managing FYP projects, making it easy for administrators, evaluators, and students to access and review project details.
- **Role-Based Access:** Different user roles (e.g., administrators, evaluators, and students) ensure that each user has the appropriate level of access and functionality. Administrators can oversee the entire evaluation process, while evaluators and students have access to functionalities relevant to their roles.
- **Project Information Confidentiality:** Only authorized users (administrators, evaluators, and students) have access to specific information based on their roles.
- **Efficient Table Assignment:** The platform streamlines the process of allocating tables, reducing administrative overhead.
- **User-Friendly Dashboards:** Intuitive dashboards for administrators, evaluators, and students enhance user experience.
- **Secure User Authentication:** The platform employs secure user authentication mechanisms, ensuring that only authorized users can access sensitive information related to FYP projects.
  
## Note: The project uses dummy data generated using faker.
  
