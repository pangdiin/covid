<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


Please follow the instructions below.

Most  Laravel dev's should be pretty familiar with it.

1.Download or clone the repository of the exam https://github.com/pangdiin/covid
2.Duplicate the .env.example  and change the file name to .env
3.Use terminal and run the command php artisan key:generate
4. Make sure you have your mysql up and running, create a new database and name it covid_observations.
5.Use the terminal and go to the path directory of the exam and run the command composer install note: should have php and composer installed on your machine
6.Use terminal and run the command php artisan migrate
7.Use the terminal and run ##php artisan covid:data this will migrate the data from the json file to our database
8.Make a new terminal tab and run the command php artisan serve
9.Open your chrome browser and go to http://127.0.0.1:8000/top/confirmed?observation_date=2020-02-07&max_results=10 and check the result.

This the most basic cloning and installation of laravel application and its dependencies as well.
