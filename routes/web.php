<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::group(['middleware' => 'auth'], function() {

// }

Route::middleware(['auth'])->group(function () {
    Route::get('/', function() {
        return view('dashboard', [
            'people'    => App\Person::get(),
            'orders'    => App\Order::get(),
            'leads'     => App\Lead::get(),
            'costs'     => App\Cost::get(),
            'tasks'     => App\Task::get(),
            'clients'   => App\Client::get()
        ]);
    });


    // CONTACTE
Route::get('/contacte', 'PersonController@index')->name('people.index');
Route::get('/contacte/adauga', 'PersonController@create')->name('people.create');
Route::post('/contacte', 'PersonController@store')->name('people.store');
Route::get('/contacte/{person}', 'PersonController@show')->name('people.show');
Route::get('/contacte/{person}/edit', 'PersonController@edit')->name('people.edit');
Route::put('/contacte/{person}', 'PersonController@update')->name('people.update');
Route::put('/contacte/{person}/favorite', 'PersonController@favoriteToggle')->name('people.favorite');


// SARCINI
Route::get('/tasks', 'TaskController@index')->name('tasks.index');
Route::get('/tasks/adauga', 'TaskController@create')->name('tasks.create');
Route::post('/tasks', 'TaskController@store')->name('tasks.store');
Route::get('/tasks/{task}', 'TaskController@show')->name('tasks.show');
Route::get('/tasks/{task}/edit', 'TaskController@edit')->name('tasks.edit');
Route::put('/tasks/{task}', 'TaskController@update')->name('tasks.update');

// LEADS
Route::get('/leads', 'LeadController@index')->name('leads.index');
Route::get('/leads/adauga', 'LeadController@create')->name('leads.create');
Route::post('/leads', 'LeadController@store')->name('leads.store');
Route::get('/leads/{lead}', 'LeadController@show')->name('leads.show');
Route::get('/leads/{lead}/edit', 'LeadController@edit')->name('leads.edit');
Route::put('/leads/{lead}', 'LeadController@update')->name('leads.update');

// CLIENTS
Route::get('/clients', 'ClientController@index')->name('clients.index');
Route::get('/clients/adauga', 'ClientController@create')->name('clients.create');
Route::post('/clients', 'ClientController@store')->name('clients.store');
Route::get('/clients/{client}', 'ClientController@show')->name('clients.show');
Route::get('/clients/{client}/edit', 'ClientController@edit')->name('clients.edit');
Route::put('/clients/{client}', 'ClientController@update')->name('clients.update');

// COSTS
Route::get('/costs', 'CostController@index')->name('costs.index');
Route::get('/costs/adauga', 'CostController@create')->name('costs.create');
Route::post('/costs', 'CostController@store')->name('costs.store');
Route::get('/costs/{cost}', 'CostController@show')->name('costs.show');
Route::get('/costs/{cost}/edit', 'CostController@edit')->name('costs.edit');
Route::put('/costs/{cost}', 'CostController@update')->name('costs.update'); 

// ORDERS
Route::get('/orders', 'OrderController@index')->name('orders.index');
Route::get('/orders/adauga', 'OrderController@create')->name('orders.create');
Route::post('/orders', 'OrderController@store')->name('orders.store');
Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
Route::get('/orders/{order}/edit', 'OrderController@edit')->name('orders.edit');
Route::put('/oders/{order}', 'OrderController@update')->name('orders.update');


});



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
