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


class MyClass{
   public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');
Route::get('/myclass2','ImplicitController@myMethod');

Route::get('/foo/bar','UriController@index');

Route::get('/register',function() {
   return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');

Route::get('/cookie',function(){
    return response('Hello world',200)->header('Content-type','text/html')
            ->withCookie(cookie()->forever('name','virat-gandhi'));
            
});
Route::get('json',function() {
   return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});

Route::get('/test_redirection',['as'=>'testing',function(){
    return view('test');
}]);

Route::get('redirect',function(){
    return redirect()->route('testing');
});

Route::get('rr','RedirectController@index');

Route::get('/redirectcontroller',function() {
    return redirect()->action('RedirectController@index');
});

Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
Route::get('view-records','StudViewController@index');

Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');

Route::get('delete-records','StudDeleteController@index');
Route::get('delete/{id}','StudDeleteController@destroy');

Route::get('/form',function() {
   return view('form');
});

Route::get('/validation','ValidationController@showform');
Route::post('/validation','ValidationController@validateform');

Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');

Route::get('ajax',function() {
   return view('message');
});
Route::post('/getmsg','AjaxController@index');