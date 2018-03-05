<?php




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as'=>'home'
    ]);

    Route::get('/post/create', [
        'uses' => 'PostsController@create',
        'as'  => 'post.create'
    ]);

    Route::post('/post/store', [
        'uses' => 'PostsController@store',
        'as'  => 'post.store'
    ]);

    Route::get('/category/create', [
        'uses' => 'CategoriesController@create',
        'as'  => 'category.create'
    ]);

    Route::get('/categories', [
        'uses' => 'CategoriesController@index',
        'as'  => 'categories'
    ]);

    Route::post('/category/store', [
        'uses' => 'CategoriesController@store',
        'as'  => 'category.store'
    ]);

    Route::get('/category/edit/{id}', [
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);

    Route::get('/category/delete/{id}', [
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);

    Route::post('/category/update/{id}', [
        'uses' =>'CategoriesController@update',
        'as' => 'category.update'

    ]);
});

