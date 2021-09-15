<?php
Route::get('', function() {
    return redirect('/az');
});
/* ================== Homepage ================== */

foreach(config('app.languages') as $language){
    Route::group(['prefix' => $language, 'middleware' => 'locale'],function (){

        Route::auth();
        Route::get('/', 'HomeController@index')->name('index');
        Route::get('/news', 'HomeController@news');
        Route::get('/news/association', 'HomeController@associationNews');
        Route::get('/news/cnfa', 'HomeController@cnfaNews');
        Route::get('/news/{id}', 'HomeController@newsInner');
        Route::get('/about-us', 'HomeController@aboutUs');
        Route::get('/contact', 'HomeController@contact');
        Route::get('/faq', 'HomeController@faq');

        Route::group(['middleware' => ['auth']], function () {
            Route::get('/farmer/profile', 'Farmer\ProfileController@index');
            Route::post('/farmer/profile', 'Farmer\ProfileController@update');
            Route::get('/farmer/messages', 'Farmer\MessageController@lists');
            Route::get('/farmer/notification', 'Farmer\ProfileController@notification');
            Route::post('/farmer/messages', 'Farmer\MessageController@store');
            Route::get('/farmer/crops/calculate', 'Farmer\CropsController@calculate');
            Route::resource('/farmer/crops', 'Farmer\CropsController');
            Route::get('/farmer/products', 'Farmer\ProductsController@list');
            Route::get('/farmer/products/my', 'Farmer\ProductsController@myList');
            Route::get('/farmer/services', 'Farmer\ServicesController@list');
            Route::get('/farmer/services/my', 'Farmer\ServicesController@myList');
            Route::get('/farmer/crops/getCrops/{id}', 'Farmer\CropsController@getCrops');
            Route::get('/farmer/packages', 'Farmer\PackageController@lists');

            Route::get('/farmer/crops/getExpense/{id}', 'Farmer\CropsController@getExpense');
            Route::get('/dragro/plants/getPlantExpenses/{id}', 'Dragro\PlantsController@getPlantExpenses');

            Route::get('/farmer/notification/readNotification/{id}', 'Farmer\ProfileController@readNotification');


            Route::get('/dragro/about', 'DrAgro\AboutController@show');
            Route::post('/dragro/about/{id}', 'DrAgro\AboutController@update');

            Route::post('/dragro/plants/{id}', 'DrAgro\PlantsController@update');


            Route::resource('/dragro/blog', 'DrAgro\BlogController');
            Route::get('/dragro/blog/{id}/delete', 'DrAgro\BlogController@delete');
            Route::resource('/dragro/farmers', 'DrAgro\FarmersController');
            Route::get('/dragro/farmers/{id}/delete', 'DrAgro\FarmersController@delete');
            Route::resource('/dragro/products', 'DrAgro\ProductsController');
            Route::get('/dragro/products/{id}/delete', 'DrAgro\ProductsController@delete');
            Route::resource('/dragro/services', 'DrAgro\ServicesController');
            Route::get('/dragro/services/{id}/delete', 'DrAgro\ServicesController@delete');
            Route::resource('/dragro/slider', 'DrAgro\SliderController');
            Route::get('/dragro/slider/{id}/delete', 'DrAgro\SliderController@delete');
            Route::resource('/dragro/notification', 'DrAgro\NotificationController');
            Route::get('/dragro/notification/{id}/delete', 'DrAgro\NotificationController@delete');

            Route::post('/dragro/farmers/search', 'DrAgro\FarmersController@search');
            Route::get('/dragro/notifications/getCrops/{id}', 'DrAgro\NotificationController@getCrops');


            Route::get('/dragro/settings', 'DrAgro\SettingsController@show');
            Route::post('/dragro/settings', 'DrAgro\SettingsController@update');
            Route::resource('/dragro/messages', 'DrAgro\MessageController');
            Route::resource('/dragro/plants', 'DrAgro\PlantsController');
            Route::resource('/dragro/plantTypes', 'DrAgro\PlantTypesController');
            Route::get('/dragro/plantTypes/{id}/delete', 'DrAgro\PlantTypesController@delete');
            Route::get('/dragro/plants/{id}/delete', 'DrAgro\PlantsController@delete');

        });

    });

    Route::post('/api/v0/login', 'Api\AuthController@login');
    Route::post('/api/v0/register', 'Api\AuthController@register');
    Route::group(['middleware'  => ['token'], 'prefix' =>'/api/v0', 'namespace' => 'Api'], function(){
        Route::get('/profile', 'UserController@profile');
        Route::get('/user/edit', 'UserController@edit');
        Route::post('/user/edit', 'UserController@update');
        Route::get('/regions', 'AgroController@regions');
        Route::get('/water-supply-types', 'AgroController@waterSupply');
        Route::get('/all-unread-message-count', 'UserController@unreadMessages');
        Route::get('/all-notifications', 'UserController@notifications');
        Route::get('/service-packages', 'AgroController@packages');


    });
}






