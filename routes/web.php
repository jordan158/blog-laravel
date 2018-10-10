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

Route::get('/', function () {
    return view('welcome');
});

//路由可选参数，参数后加一个？号
Route::get('user/{id}/{id2?}', function ($i,$k=0) {
    echo 'user'.$i.'and'.$k;
});

//路由where条件
Route::get('user/{id}', function ($id) {
    return $id;
})->where('id','[0-9]+');
//命名路由
Route::get('user1',['as' => 'route_name',function(){
    echo route('route_name');// http://blog-laravel.com/user1
    return '命名路由';
}]);

//控制器命令路由
Route::get('test',['as' => 'route_name','uses' => 'Admin\IndexController@index']);

Route::get('test1','Admin\IndexController@index')->name('route_name');

//分组路由
Route::group(['prefix' => 'admin','namespace'=>'Admin'],function (){
    Route::get('login','IndexController@login');
    Route::get('index','IndexController@index');
    Route::resource('article','ArticleController');
});
//中间件
Route::get('/mid', function () {
    return view('welcome');
})->middleware('admin.login');


//web则为框架自带，使用则可以使用session,admin.login中间件为自己创建
Route::group(['prefix' => 'admin_test','namespace'=>'Admin','middleware'=>['web','admin.login']],function (){
    Route::get('login','IndexController@login');
    Route::get('index','IndexController@index');
    Route::resource('article','ArticleController');
});


Route::group(['middleware' => ['web']],function (){
    Route::get('admin_test1/login','Admin\IndexController@login');

    Route::get('admin_test1/',function (){
        session(['key' => '123']);
        return view('welcome');
    });



});
Route::group(['prefix'=>'test_view'],function(){

    Route::get('1', 'Test88Controller@index1');
    Route::get('2', 'Test88Controller@index2');
    Route::get('3', 'Test88Controller@index3');

});

Route::get('zimoban','Test88Controller@zimoban');
Route::get('zimoban1','Test88Controller@zimoban1');
Route::get('layouts','Test88Controller@layouts');
Route::get('indexsql','IndexController@index');