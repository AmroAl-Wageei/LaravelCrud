<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('crud', CrudController::class);

// Route::get('/crud' , [CrudController::class , 'index']);

// different way to write route resource 
// Route::get('/crud', 'CrudController@index');
// Route::resource('crud', 'CrudController')->only(['index', 'show']);
// Route::resource('crud', 'CrudController')->except(['create', 'store', 'edit', 'update', 'destroy']);



// Route::get('/aa', function () {
//     return view('welcome');
// });

// Convincing name for the route        
// Route::get('/about', function () {
//     return view('about');
// });


// ###########################################################C

// CRUD IN LARAVEL
// C - Create , R - Read , U - Update , D - Delete

// Steps to create a CRUD in Laravel
// 1. Create a model
// 2. Create a migration
// 3. Create a controller
// 4. Create a view 
// 5. Create a route


// Create Database from phpmyadmin and connect with laravel
// php artisan migrate
// php artisan make:model Crud -mcr


// ########################################################
// if i create model and change name for migration
// protected $table = 'crud'; in model

// if i not use timestap and delete from table 
//  public $timestamps = false; in model

// if i want primary key in table not defualt id 
// protected $primaryKey = 'crud_id'; in model

//  if i want increment false in table  
// public $incrementing = false; in model

// if i want to change the type of primary key
// protected $keyType = 'string'; in model

// if i want to change the name of created_at and updated_at
// const CREATED_AT = 'created_at';
// const UPDATED_AT = 'updated_at';

// if i want to change database connection
// protected $connection = 'sqlite'; in model
// protected $connection = 'MongoDB'; in model
// protected $connection = 'sqlServer'; in model

// ########################################################

// What different between eleqount and query builder
// Eloquent ORM is an advanced implementation of the active record pattern, which is a design pattern that is used to abstract database interaction logic.
// Query Builder is a more direct way to interact with a database. It is a more direct way to write SQL queries than Eloquent ORM.
// Eloquent ORM is faster than Query Builder because it is more abstracted and has more built-in features.
// Query Builder is more flexible than Eloquent ORM because it allows you to write raw SQL queries.
// Eloquent ORM is more secure than Query Builder because it uses prepared statements to prevent SQL injection attacks.
// Eloquent ORM is easier to use than Query Builder because it has a more intuitive syntax.
// Query Builder is more powerful than Eloquent ORM because it allows you to write complex SQL queries.
// Eloquent ORM is more object-oriented than Query Builder because it uses models to represent database tables.
// Query Builder is more procedural than Eloquent ORM because it uses functions to interact with the database.
// Eloquent ORM is more scalable than Query Builder because it allows you to define relationships between models.
// Query Builder is more efficient than Eloquent ORM because it allows you to write optimized SQL queries.
// Eloquent ORM is more maintainable than Query Builder because it uses models to encapsulate database logic.
// Query Builder is more customizable than Eloquent ORM because it allows you to write custom SQL queries.
// Eloquent ORM is more portable than Query Builder because it is database-agnostic.
// Query Builder is more lightweight than Eloquent ORM because it does not have as many built-in features.
// Eloquent ORM is more user-friendly than Query Builder because it has a more intuitive API.

// ########################################################