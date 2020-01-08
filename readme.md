# Lumen PHP/ Jwt token  Biolerplate

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching. This boilerplate includes two out of the box support for artisan commands such as, php artisan serve to serve your lumen application and php artisan api:list to show a table of all api routes that you created. Lumen doesn't contain those two commands

## What does this bioletplate include

..* Lumen 6.0
..* JWT Auth using tymon/jwt-auth
..* ElasticSearch 
..* support for php artisan serve && php artisan api:list


## How to start 
..* Clone this repo `git clone `
..* Delete .git file 
..* Change .env.example file name to .env and store your secret values 
..* Run `composer install` 
..* Run `php artisan jwt:generate`
---
... To start your development server run `php artisan serve` which will run  on port 8800 as a default port for our lumen app
... To run your app on a specific port run ` php artisan serve 8000`


## Official Lumen Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).


## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
