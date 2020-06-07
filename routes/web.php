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

Route::get('/', function () {
    return view('medical.issues');
});
Route::get('/me', function () {
    return view('index');
});
Route::get('/giving', function () {

    // Create a stream
    $opts = array(
        'http' => array(
            'method' => "GET",
            'header' => "Accept: application/json\r\n",
        ),
    );
    $context = stream_context_create($opts);
    $url = 'https://api.globalgiving.org/api/public/projectservice/projects/collection/ids?api_key=29c36a59-f29b-4184-ad9f-50901f31ae9f&projectIds=123,1883';
    // Open the url using the HTTP headers set above

    $output = file_get_contents($url, false, $context);
    $decodeData = json_decode($output);
    foreach ($decodeData as $data => $value) {
        echo $value['id'];
    }

});

Auth::routes();
Route::resource('tasks', 'TasksController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/task/{slug}/edit', 'HomeController@edit')->name('edit');
Route::get('health/issues', 'IssuesController@issues');
Route::post('health/getresult', 'IssuesController@result')->name('issues.search');
Route::post('contact', 'IssuesController@contact')->name('contact.form');