# Vlug Laravel Boilerplate
Main features:
- Tailwindcss + purgecss
- In-memory Sqlite testing database
- Snapshot assertions

# Boilerplate version
2018-05-25 [laravel/laravel@0869d963aa96e2a9d4ab58cb451e35e9a31b07d9](https://github.com/laravel/laravel/compare/0869d963aa96e2a9d4ab58cb451e35e9a31b07d9...master)

## Installation
Rename `.env.example` to `.env` and fill in the arrows
```bash
composer update

php artisan key:generate
 
php artisan migrate
 
npm install (--no-bin-links)
 
npm run dev
```

### Broadcasting events
```bash
composer require pusher/pusher-php-server
 
npm install laravel-echo
 
npm install pusher-js
```

Add the following to the page head in  `base-template.blade.php`:
```php
<script>
    <?php
    echo 'window.Laravel = ' . json_encode([                
            'pusherKey'       => env('PUSHER_APP_KEY'),
            'pusherCluster'   => env('PUSHER_APP_CLUSTER'),
            'pusherEncrypted' => env('APP_HTTPS'),
        ]);
    ?>
</script>
```
