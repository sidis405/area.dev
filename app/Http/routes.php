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


Route::get('/', 'HomeController@index');

Route::group(array('prefix' => 'admin', 'middleware' => 'auth'), function () {

    Route::post('attivita/upload_image', 'Admin\FilesController@store');
    Route::post('attivita/get_images', 'Admin\FilesController@index');


    Route::get('/', function(){
        return redirect()->to('admin/attivita');
    });

    // Route::get('/', [
    //     'as'    => 'admin_home',
    //     'uses'  => 'Admin\HomeController@index'
    //     ]);

    #   ACTIVITIES ROUTES

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


    #   STAFF ROUTES

    Route::post('staff/ordina', '\Rutorika\Sortable\SortableController@sort');

    Route::get('staff', [
        'as'    => 'admin_staff',
        'uses'  => 'Admin\StaffController@index'
        ]);

    Route::get('staff/crea', [
        'as'    => 'admin_create_staff',
        'uses'  => 'Admin\StaffController@create'
        ]);

    Route::post('staff', [
        'as'    => 'admin_store_staff',
        'uses'  => 'Admin\StaffController@store'
        ]);

    Route::get('staff/{id}/modifica', [
        'as'    => 'admin_edit_staff',
        'uses'  => 'Admin\StaffController@edit'
        ]);

    Route::post('staff/{id}', [
        'as'    => 'admin_store_staff',
        'uses'  => 'Admin\StaffController@update'
        ]);

    Route::post('staff/{id}/rimuovi', [
        'as'    => 'admin_delete_staff',
        'uses'  => 'Admin\StaffController@destroy'
        ]);

    Route::delete('staff/{id}/delete_image', [
        'as'    => 'admin_delete_staff',
        'uses'  => 'Admin\StaffController@destroyImage'
        ]);


    Route::get('testi', [
        'as'    => 'admin_texts',
        'uses'  => 'Admin\PageTextsController@index'
        ]);

    Route::get('testi/{id}/modifica', [
        'as'    => 'admin_edit_texts',
        'uses'  => 'Admin\PageTextsController@edit'
        ]);

    Route::post('testi/{id}', [
        'as'    => 'admin_update_texts',
        'uses'  => 'Admin\PageTextsController@update'
        ]);

});
