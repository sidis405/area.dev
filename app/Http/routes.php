<?php
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// // Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('image/{path}', function (League\Glide\Server $server, Illuminate\Http\Request $request) {
    $server->outputImage($request);

})->where('path', '.*');

Route::get('/', function () {
    return view('welcome');
});

Route::group(array('prefix' => 'admin', 'middleware' => 'auth'), function () {

    Route::post('attivita/upload_image', 'Admin\FilesController@store');
    Route::post('attivita/get_images', 'Admin\FilesController@index');

    Route::get('/', [
        'as'    => 'admin_home',
        'uses'  => 'Admin\HomeController@index'
        ]);

    Route::get('attivita', [
        'as'    => 'admin_activities',
        'uses'  => 'Admin\ActivitiesController@index'
        ]);

    Route::get('attivita/crea', [
        'as'    => 'admin_create_activities',
        'uses'  => 'Admin\ActivitiesController@create'
        ]);

    Route::post('attivita', [
        'as'    => 'admin_store_activities',
        'uses'  => 'Admin\ActivitiesController@store'
        ]);

    Route::get('attivita/{id}/modifica', [
        'as'    => 'admin_edit_activities',
        'uses'  => 'Admin\ActivitiesController@edit'
        ]);

    Route::post('attivita/{id}', [
        'as'    => 'admin_store_activities',
        'uses'  => 'Admin\ActivitiesController@update'
        ]);

    Route::post('attivita/{id}/rimuovi', [
        'as'    => 'admin_delete_activities',
        'uses'  => 'Admin\ActivitiesController@destroy'
        ]);

    Route::delete('attivita/{id}/delete_image', [
        'as'    => 'admin_delete_activities',
        'uses'  => 'Admin\ActivitiesController@destroyImage'
        ]);




    Route::get('staff', [
        'as'    => 'admin_staff',
        'uses'  => 'Admin\StaffController@index'
        ]);

    Route::get('testi', [
        'as'    => 'admin_texts',
        'uses'  => 'Admin\TextsController@index'
        ]);

});
