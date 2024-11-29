# Installation instructions

1. Clone this repository into your html folder
2. Run `composer install` to download Laravel and all the other code required
3. Make a copy of `.env.example` called `.env` and input your database connection details
4. Run `php artisan migrate` to create the database and it's structure
5. Run `php artisan db:seed` to fill the database with test data
6. Run `php artisan serve --host=0.0.0.0` to run the app

## To get tailwind working
1. Run `npm install`
2. Run `npm run dev`


