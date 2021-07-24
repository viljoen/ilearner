<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/courses', function () {
    return view('courses');
});


Route::get('/courses/{id}', function ($id) {
    /*
     * use the $id variable to query the db for a record
     */

    return view('courseDetail',['id' => $id]);
});

Route::get('/learning', function () {
    return view('learning');
});

Route::get('/learning/{id}', function ($id) {
    /*
     * use the $id variable to query the db for a record
     */

    return view('learningPath',['id' => $id]);
});



Route::get('/user/{id}', function ($id) {
    /*
     * use the $id variable to query the db for a record
     */

    return view('userDetail',['id' => $id]);
});

Route::get('/client', [ClientController::class, 'index']);
Route::get('/client/create', [ClientController::class, 'create']);
Route::post('/client',[ClientController::class, 'store'])->name('client.store');
Route::get('/client/{id}', [ClientController::class, 'show']);
Route::delete('/client/{id}', [ClientController::class, 'destroy'])->name('client.destroy');



Route::get('/test', [TestController::class, 'index']);
    /*
     * Everything in this section, for testing would start with
     * Route::get('/test', function () {
     * This will return the linked page view only
     */
    //return view('test');

    /*
     * This will return a string
     * Content-Type: text/html; charset=UTF-8
     * return 'test';
     */

    /*
     * This will return json
     * Content-Type: application/json
     * return ['firstName' => 'Clive', 'lastName' => 'Viljoen'];
     */


    /*
     * This will imitate returning data from the database
     * return view ('test',['firstName' => 'Clive', 'lastName' => 'Viljoen']);
     */


    /*
     * This will imitate returning data from the database as array
     *  $userProfile = [
        'firstName' => 'Clive',
        'lastName' => 'Viljoen',
        'email' => 'viljoenc@viljoentechnologies.com',
        'dateCreated' => '2021/07/10',
        'age' => '38'
    ];
     */

    /*
     * This is an extension of the use-case above (this section has also been moved to the Test controller
     *         $users = [
            ['firstName' =>'Clive', 'lastName'=> 'Viljoen', 'email' => 'viljoenc@viljoentechnologies.com', 'dateCreated' => '2021/07/10', 'age' => '38'],
            ['firstName' =>'Christopher', 'lastName'=> 'Micheal', 'email' => 'michealm@viljoentechnologies.com', 'dateCreated' => '2021/07/10', 'age' => '26'],
            ['firstName' =>'Keaton', 'lastName'=> 'Reeves', 'email' => 'reevesc@viljoentechnologies.com', 'dateCreated' => '2021/07/10', 'age' => '22'],
            ['firstName' =>'Kal', 'lastName'=> 'el', 'email' => 'elk@viljoentechnologies.com', 'dateCreated' => '2021/07/10', 'age' => '54']
        ];

     *
     * $name = request ('name');
     * This line lets you test an individual one
     * ;
     * return view ('test', [
        'users' => $users,
        //'name' => $name
        'name' => request ('name'),
        'age' => request ('age')
        ]);
     */


Route::get('/test/{id}', [TestController::class, 'show']);
    /*
     * use the $id variable to query the db for a
     * Route::get('/test/{id}', function ($id) {
            return view('details',['id' => $id]);
            });
     */



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
