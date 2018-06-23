# Vlug Laravel Boilerplate
Main features:
- Tailwindcss + purgecss
- In-memory SQLite testing database
- Snapshot assertions

# Boilerplate version
2018-06-23 [laravel/laravel@d53539](https://github.com/laravel/laravel/compare/d53539b47b6d2a20d0c3d3257ad801bc72547c9d...master)

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
