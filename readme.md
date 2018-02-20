# PHP---Laravel-framework - Project

 In this sample project using PHP - Laravel framework to build a website  sort of like stackoverflow which will allow users to post a message and others can reply to. 
Good Luck!



![alt text](https://github.com/misheil/-PHP---Laravel-framework/blob/master/public/img/project.gif)

The commands which I used in this project :


php artisan serve
php artisan migrate:install

-- To create tables into the migration :
php artisan migrate

php artisan make:provider ComposerServiceProvider

php artisan make:migration create_catagories_table -- create=catagories
php artisan make:migration create_users_table
php artisan make:migration create_replies_table -- create=replies

this command to do any ruls for a form and it iwll save under request folder,
php artisan make:request CreatePostRequest

---------------- if i did update into table in DB database/migration
php artisan migrate:rollback

---------------- to install slug 
composer require cviebrock/eloquent-sluggable:^4.5

---------------- to work with {!! Form::open(['route' => 'viewpost' , 'id' => 'reply-form'])  !!}
composer require "laravelcollective/html":"^5.2.0"

Next, add your new provider to the providers array of config/app.php:

  'providers' => [
    // ...
    Collective\Html\HtmlServiceProvider::class,
    // ...
  ],
Finally, add two class aliases to the aliases array of config/app.php:

  'aliases' => [
    // ...
      'Form' => Collective\Html\FormFacade::class,
      'Html' => Collective\Html\HtmlFacade::class,
    // ...
  ],


---------------- 
https://sweetalert.js.org/
npm install sweetalert --save

Using Composer

composer require codecourse/notify
Add the service provider to config/app.php
Codecourse\Notify\NotifyServiceProvider::class,

----------------
php artisan make:seeder UsersTableSeeder
php artisan migrate:refresh --seed
