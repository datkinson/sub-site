# Site Generator

This project is an experiment to generate 'micro-sites' via a web admin panel

## Setup

To setup the application you will need to create an empty sqlite file
```bash
touch app/database/production.sqlite
```
Then composer will need to get all of the dependancies
```bash
composer install
```
Then finally you will need to create the database structure and seed it with some default data
```bash
php artisan migrate --seed
```

Optionally you can run the application using
```bash
php artisan serve
```
This will use php to serve the application on your local machine without the need for apache or some other web server.

By default while the above command is running the application will be available at http://localhost:8000

### License

This framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
