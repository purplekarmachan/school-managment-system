# School Management System

A comprehensive web-based School Management System built with Laravel and Tailwind CSS. This system helps educational institutions manage their academic operations efficiently.

## Features

-   **User Authentication**

    -   Secure login and registration system
    -   User profile management

-   **Subject Management**

    -   Create and manage academic subjects
    -   Organize subjects by categories
    -   Track subject details and requirements

-   **Address Management**

    -   Store and manage address information
    -   Handle multiple address types (student, teacher, school locations)

-   **Course Management**

    -   Create and manage courses
    -   Assign teachers to courses
    -   Track course schedules and details

-   **Teacher Management**

    -   Maintain teacher profiles
    -   Track teacher qualifications and specializations
    -   Manage teacher assignments

-   **Student Management**
    -   Maintain student records
    -   Track student enrollment
    -   Manage student information

## Technology Stack

-   **Backend Framework**: Laravel
-   **Frontend**:
    -   Tailwind CSS for styling
    -   Blade templating engine
-   **Database**: MySQL
-   **Authentication**: Laravel Breeze

## Requirements

-   PHP >= 8.1
-   Composer
-   Node.js & NPM
-   MySQL/PostgreSQL
-   Web server (Apache/Nginx)

## Installation

1. Clone the repository:

```bash
git clone https://github.com/purplekarmachan/school-managment-system
cd school-management-system
```

2. Install PHP dependencies:

```bash
composer install
```

3. Install NPM dependencies:

```bash
npm install
```

4. Create environment file:

```bash
cp .env.example .env
```

5. Generate application key:

```bash
php artisan key:generate
```

6. Configure your database in `.env` file:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run database migrations:

```bash
php artisan migrate
```

8. Start the development server:

```bash
php artisan serve
```

9. In a separate terminal, start Vite:

```bash
npm run dev
```

10. Or use composer to run everything:

```bash
composer run dev
```

## Usage

1. Access the application at `http://localhost:8000`
2. Register a new account or login with existing credentials
3. Navigate through the different modules using the dashboard


