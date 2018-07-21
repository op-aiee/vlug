# Vlug Laravel Boilerplate
Main features:
- [Tailwind CSS](https://github.com/tailwindcss/tailwindcss)
- Ready-to-go testing setup
    - In-memory SQLite database
    - [Snapshot assertions](https://github.com/spatie/phpunit-snapshot-assertions)

Opinionated defaults:
- `app/Models` directory
- [Ide Helpers](https://github.com/barryvdh/laravel-ide-helper) are automatically generated after `composer update`
- Separate route files for web, api and admin routes
- Auto-loaded `app/Support/helpers.php` file
- An abstract `app/Support/Enums/Enum` class
- Unhelpful phpdoc and comments have been removed
- No `tests/Feature` directory
- No `routes/console.php` and `routes/channels.php` files

# Boilerplate version
[compare to laravel master](https://github.com/laravel/laravel/compare/5da2d13b04ede450120affdd46c0cbe3a2fe54ef...master)

## Installation
```bash
cp .env.examle .env

composer update

php artisan key:generate
 
php artisan migrate
 
npm install
 
npm run dev
```
