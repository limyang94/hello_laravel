<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
# 依赖注入
//class Bar{}
//class Foo{
//    public  $bar;
//    public function __construct(Bar $bar){
//        $this->bar = $bar;
//    }
//}

//App::bind('Foo',function(){
//    return new Foo(new Bar);
//});


Route::get('/', function () {

    dd(app('Billing')->charge());
    // return view('welcome');
});

Route::get('/home','StaticPagesController@home');
Route::get('/help','StaticPagesController@help')->name("help");
Route::get('/about','StaticPagesController@about')->name("about");

Route::get('signup','UsersController@create')->name("signup");
resource('users','UsersController');