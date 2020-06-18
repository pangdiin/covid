<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


Please follow the instructions below.

Most  Laravel dev's should be pretty familiar with it.

- Download or clone the repository of the exam https://github.com/pangdiin/covid
- Duplicate the .env.example  and change the file name to .env
- Use terminal and run the command "php artisan key:generate"
-  Make sure you have your mysql up and running, create a new database and name it covidapp.
- Use the terminal and go to the path directory of the app and run the command "composer install" note: should have php and composer installed on your machine
- Use terminal and run the command "php artisan migrate"
- Use the terminal and run "php artisan covid:data" this will migrate the data from the json file[this is came from the csv file that you have given, I just convert it to json in order to push in the database] to our database
- Make a new terminal tab and run the command "php artisan serve"
- Open your chrome browser and go to http://127.0.0.1:8000/top/confirmed?observation_date=2020-02-07&max_results=10 and check the result.

- This the most basic cloning and installation of laravel application and its dependencies as well.
