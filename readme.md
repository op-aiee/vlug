# Vlug Laravel Boilerplate
Main features:
- Tailwindcss + purgecss
- In-memory SQLite testing database
- Snapshot assertions

# Boilerplate version
2018-06-23 [compare to laravel master](https://github.com/laravel/laravel/compare/c6d7d83ba3c81b31d663ae2917be4c81cc905b8b...master)

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
