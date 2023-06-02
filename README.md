<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Laravel Photos

## Usage

- ### Database
This app uses MySQL. To use something different, open up config/Database.php and change the default driver. <br>
To use MySQL, install it, setup a database and then add your database credentials(database, username and password) to the .env.example file and rename it to .env

- ### Database Migrations
To create all database tables and columns, run the following:
```
php artisan migrate
```

- ### Database Seeding
To add the example recipes with a single user, run the following:
```
php artisan db:seed
```
- ### Running The App
Run the following:
```
php artisan serve
```

