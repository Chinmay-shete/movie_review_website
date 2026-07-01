# Repository Analysis Report: Travel India

Based on the scan of the current repository (`travel_india-new`), here is a comprehensive report on the project's structure, technology stack, and core functionalities.

## Project Overview

The repository contains **Travel India**, a complete PHP/MySQL web application designed for browsing both Indian and international travel packages, hotel listings, and booking trips. It features email OTP authentication, a Razorpay payment gateway integration, and a comprehensive admin panel.

## Technology Stack

The application is built using a traditional LAMP/MAMP stack architecture:

*   **Backend:** PHP 8+ (written in procedural style)
*   **Database:** MySQL/MariaDB
*   **Frontend:** HTML, CSS, JavaScript (Vanilla)
*   **Email Sending:** Bundled `PHPMailer` library
*   **Payment Processing:** Razorpay Checkout (Client + Server integration)

## Core Directory Structure & Architecture

The application is organized into several key modules:

*   **`index.php`**: The main entry point and landing/home page of the application.
*   **`admin/`**: Contains the admin dashboard. Features include adding/updating packages, managing hotels, viewing users, and handling booking approvals.
*   **`Authentication/`**: Handles all user security flows including OTP, password resets, and email verifications.
*   **`book_files/`**: Contains domestic booking flows and Razorpay payment handlers.
*   **`International_book/`**: Contains international booking and payment flows.
*   **`Lakshadweep/`**: A standalone destination module example with its own specific booking and payment pages.
*   **`config/`**: Holds configuration files, specifically database connections, authentication access guards, and reusable alerts.
*   **`database/`**: Contains `major_project.sql` which holds the database schema and seed data necessary to set up the project.
*   **`PHPMailer/`**: The local, self-contained installation of the PHPMailer library.
*   **Static Assets**: Divided into `css/`, `js/`, `image/`, `hotel_image/`, and `font/`.

## Key Features Identified

1.  **Package & Hotel Browsing**: Separate flows for domestic tours, international tours, and hotel bookings.
2.  **Authentication System**: Robust email-based OTP verification for secure login and account recovery.
3.  **Payment Gateway Integration**: Built-in integration with Razorpay to handle booking transactions securely.
4.  **Admin Dashboard**: A full CRUD (Create, Read, Update, Delete) interface for administrators to manage the site's content and review user feedback/bookings.

## Setup Requirements

To run this project locally, a developer needs:
*   PHP 8.1+
*   MySQL 8+
*   A local web server (like Apache, Nginx via XAMPP/MAMP, or the PHP built-in server `php -S localhost:8000 -t .`)
*   *Optional but recommended:* Razorpay API Keys (Test Mode) and SMTP credentials for testing payments and email OTP functionalities.

## Conclusion

The `travel_india-new` repository is a structured, procedural PHP application with distinct separation between public browsing, authentication, booking flows, and admin management. The codebase is self-contained with bundled libraries (like PHPMailer) and provides a solid foundation for a travel booking platform.
