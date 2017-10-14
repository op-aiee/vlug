# Vlug boilerplate
Opinionated, basic Laravel boilerplate.

## Installation
```bash
php artisan key:generate
 
composer update
 
php artisan migrate
 
yarn install
 
npm run dev
```

### Server permissions
todo




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