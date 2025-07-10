# Laravel SaaS Starter Kit

A comprehensive SaaS starter kit built with Laravel, featuring team-based subscriptions and payment processing.

## Features

-   **Laravel Jetstream** with team support for multi-tenant SaaS applications
-   **Laravel Cashier** integration with Paddle for payment processing
-   **Team-based subscriptions** - payments are attached to teams rather than individual users
-   **Built-in authentication** with Fortify
-   **Two-factor authentication** support
-   **API token management** for team members
-   **Email verification** and password reset functionality
-   **Team invitations** and member management
-   **Modern UI** with Tailwind CSS

## Tech Stack

-   **Backend**: Laravel 10+
-   **Authentication**: Laravel Fortify + Jetstream
-   **Payments**: Laravel Cashier with Paddle
-   **Frontend**: Blade templates with Tailwind CSS
-   **Database**: MySQL/PostgreSQL (configurable)

## Getting Started

### Prerequisites

-   PHP 8.1+
-   Composer
-   Node.js & NPM
-   Database (MySQL/PostgreSQL)

### Installation

1. **Clone the repository**

    ```bash
    git clone <repository-url>
    cd saas-starter
    ```

2. **Install PHP dependencies**

    ```bash
    composer install
    ```

3. **Install Node.js dependencies**

    ```bash
    npm install
    ```

4. **Environment setup**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Configure your database**
   Edit `.env` file with your database credentials:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

6. **Run migrations**

    ```bash
    php artisan migrate
    ```

7. **Build assets**

    ```bash
    npm run build
    ```

8. **Start the development server**
    ```bash
    php artisan serve
    ```

## Configuration

### Paddle Integration

To enable payment processing, configure your Paddle credentials in `.env`:

```
PADDLE_VENDOR_ID=your_vendor_id
PADDLE_VENDOR_AUTH_CODE=your_auth_code
PADDLE_ENVIRONMENT=sandbox
```

### Team Subscriptions

This starter kit is designed for team-based SaaS applications where:

-   Users can create and manage teams
-   Subscriptions are attached to teams, not individual users
-   Team members can be invited and managed
-   Payment processing is handled at the team level

## Project Structure

```
app/
├── Actions/          # Jetstream actions
├── Models/           # Eloquent models
│   ├── User.php
│   ├── Team.php
│   ├── TeamInvitation.php
│   └── Membership.php
├── Providers/        # Service providers
└── View/            # View components

database/
├── migrations/       # Database migrations
└── seeders/         # Database seeders

resources/
└── views/           # Blade templates
    ├── dashboard.blade.php
    ├── teams/       # Team management views
    └── profile/     # User profile views
```

## Key Models

-   **User**: Individual user accounts
-   **Team**: Team/workspace entities that hold subscriptions
-   **TeamInvitation**: Team invitation management
-   **Membership**: User-team relationships with roles

## Development

### Running Tests

```bash
php artisan test
```

### Code Style

```bash
composer run-script phpcs
```

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests for new functionality
5. Submit a pull request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For support and questions, please open an issue on GitHub or contact the maintainers.
