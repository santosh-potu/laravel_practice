<?php

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
use Illuminate\Support\Facades\Log;

Route::get('/', function(){
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    $response_arr = [];
    $response_arr['author'] = 'BP';
    $response_arr['version'] = '0.1.1';
    return $response_arr;
    //return '<h3>About</h3>';
});

Route::get('/home', function () {
    $data = [];
    $data['version'] = '0.1.1';
    return view('welcome', $data);
});

Route::get('welcome/{locale}',function($locale){

    App::setLocale($locale);
    return view('language_locale');
    
});



Route::get('/facades/db/{json?}', function ($json = null) {
    $test = DB::select('SELECT * from test');
    if(!$json){
        dd($test);
    }else{
    //below one outputs json
        return $test;
    }  
});

Route::get('/facades/encrypt', function () {
    
    return Crypt::encrypt('123456789');
});

//eyJpdiI6IjVuV1lWR3JXRlFmdGFHbXljN0Vodnc9PSIsInZhbHVlIjoibEpLQWJSdmgybDBXRHdjNDJadERwM0lZRWlLZnA5d2hcL1wvMHdCNEpCSklFPSIsIm1hYyI6ImE1NDQxZDhiMTAyNjQyNTZkOTZlY2NkZTdmNmIxYThhNjU1OTI2MGI2OTFmYWUxNmRlODk1ZDNiODgxMTY3YzAifQ==

Route::get('/facades/decrypt', function () {
    
    return Crypt::decrypt('eyJpdiI6IjRmQXBhK3hmMXVXaGpGNnV5eHRlSmc9PSIsInZhbHVlIjoieWFrZjRma1d4SjR3QzUzUnBVZVUxbURyYjlBcDhhN05hQnhuekFoU2Q4VT0iLCJtYWMiOiJhOTViNTQ3MDJiM2JjNmY5YWIwZDIxNzliNGEzZDc4YTU2MmRhMmEyYzhlZjYwOTcwODY1NWU5YWJhOTU1ZWQ1In0=');
});



//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/generate/password',function(){  return bcrypt('123456789');});



Route::get('optional_param/{name?}', function ($name = 'TutorialsPoint') { return $name;});

Route::get('role',[
    'middleware'=>'Role:Editor',
    'uses' => 'TestController@index'
    ]);

Route::get('terminate',[
   'middleware' => 'terminate',
   'uses' => 'ABCController@index',
]);
