# Vlug Laravel Boilerplate
This is the boilerplate I use for almost all of my projects. It contains a lot of personal preferences and opinions i hold at the moment. There is a big chance these opninions will change in the future.

### Main features
[Tailwind CSS](https://github.com/tailwindcss/tailwindcss) instead of Bootstrap
> As opposed to Bootstrap, i actually enjoy doing front-end development when using Tailwind.

Ready-to-go testing setup
- In-memory SQLite database
- [Snapshot assertions](https://github.com/spatie/phpunit-snapshot-assertions)


### Opinionated defaults 
- `app/Models` directory
> It feels more organised to me to put models in their own directory, especially if you have more than a few.

- [Ide Helpers](https://github.com/barryvdh/laravel-ide-helper) can be generated using `composer ide-helpers`, and are automatically generated after running `composer update`
> The ide-helpers make code-completion work for a lot of magic laravel features.

- Separate route files for web, api and admin routes
> I think having seperate route files, and defining their prefixes and middleware in the `RouteServiceProvider`, keeps my route files cleaner and easier to read. It also makes it harder to make mistakes with middlewares on routes, since the most important middleware (auth) is applied on the entire route file.

- An `app/Support` directory
> A useful place to put facades, enums and other helpers

- Auto-loaded `app/Support/helpers.php` file
> Having a file where you can dump global helper functions is useful in almost any project

- A `app/Support/Enums` directory with a `UserRole` enum
> A lot of my projects use enums. Since they are not edited often, i feel like `app/Support/Enums` is a good place for them. If you have the `Support` directory collapsed in your IDE you don't even notice they're there. I use my [SjorsO/enum](https://github.com/SjorsO/enum) package for making enums.
 
- Unhelpful phpdoc and comments have been removed
> I like my code to have as little visual debt as possible (without going too crazy, of course). All default laravel comments that i found to be unhelpful have been removed. For example, this results in a way cleaner [`app/Console/Kernel`](https://github.com/SjorsO/vlug/blob/master/app/Console/Kernel.php) file

- No `tests/Feature` directory
> There is a difference between unit tests and feature/integration tests, but i have found that putting them in seperate directories is not helpful. Having only a `tests/Unit` directory that contains all my tests allows me to mimic the directory stucture of my `app` directory, and therefor quickly have an overview of all the test classes i have. It also takes away the effort of having to decide if something is a unit test or a feature test. For example, is `UserTest.php` that uses the `RefreshDatabase` trait a unit or a feature test? I don't know, and i feel like it doesn't matter, just put it in `tests/Unit/Models/UserTest.php`.

- Files that i almost always don't use in my projects have been removed:
  - `routes/console.php`
  - `routes/channels.php`
> These files are almost always empty in all my projects. Having/making things because you might possibly need them in the future is usually a bad practice. If i ever need them in project i can always create them again.

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
