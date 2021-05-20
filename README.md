# INSTALLASTION

Pre-requisites :
- Install git into your system
- Install [composer](https://getcomposer.org)
- Install XAMPP, WAMPP or others software alike , the important thing, locate php and mysql binaries

Installation steps :
- clone project into your local
- navigate your git bash into that folder that was created
- Checkout into `develop` branch : `git checkout develop`
- Create new `.env` : `cp .env.example .env`
- Install all necessary packages : `composer install`
- create new key : `php artisan key:generate`
- configure your .env file with your mysql password : `DB_PASSWORD` and `DB_USERNAME`
- create new database : `gispaskota` in MySQL and configure .env : `DB_DATABASE=gispaskota`
- import sql file : `mysql -u root -p gispaskota < database/migrations/main.sql`
- Finally, run your project : `php artisan serve`
