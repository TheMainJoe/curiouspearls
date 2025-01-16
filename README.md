<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://bitdevelopment.co.za/images/web-logo.png" width="400" alt="Bit Development Consulting Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Curious Pearls

Curious Pearls is a web application designed to provide users with a platform to explore and share knowledge on various topics. The project is built using the Laravel framework and follows a modular structure to ensure scalability and maintainability.

### File Structure

```
/c:/laragon/www/curiouspearls/
├── app/                # Contains the core code of the application
│   ├── Console/        # Artisan commands
│   ├── Exceptions/     # Application exceptions
│   ├── Http/           # Controllers, Middleware, and Form Requests
│   ├── Models/         # Eloquent models
│   ├── Providers/      # Service providers
├── bootstrap/          # Bootstrap the application
├── config/             # Configuration files
├── database/           # Migrations, factories, and seeds
├── public/             # Publicly accessible files
├── resources/          # Views, raw assets, and language files
├── routes/             # All route definitions
├── storage/            # Logs, compiled Blade templates, file uploads, etc.
├── tests/              # Automated tests
├── vendor/             # Composer dependencies
├── composer.json       # Composer dependencies file
├── package.json        # Node dependencies file
├── webpack.mix.js      # Laravel Mix configuration
└── README.md           # Project documentation
```

### Added Modules

- **User Management**: Handles user registration, authentication, and profile management.
- **Article Management**: Allows users to create, edit, and delete articles.
- **Comment System**: Enables users to comment on articles.
- **Search Functionality**: Provides search capabilities to find articles and users.
- **Notification System**: Sends notifications to users for various events.
- **Admin Panel**: Administrative interface for managing users and content.

Each module is designed to be self-contained, making it easier to maintain and extend the application as needed.