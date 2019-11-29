<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route Authentication
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('request/reset-password', 'AuthController@requestResetPassword');
    Route::post('accept/reset-password', 'AuthController@acceptResetPassword');
    Route::group(['middleware' => ['jwt']], function () {
        Route::put('change-password', 'AuthController@changePassword');
        Route::post('logout', 'AuthController@logout');
    });
});

//Route Data
Route::group(['prefix' => 'data'], function () {
    //Product
    Route::get('getProductCategory', 'DataController@getProductCategory');
    Route::post('getProductByCategoryId', 'DataController@getProductByCategoryId');
    Route::get('getNewProduct', 'DataController@getNewProduct');
    Route::post('getCommentByProductId', 'DataController@getCommentByProductId');

    //Order
    Route::post('postInforUser', 'DataController@postInforUser');
    Route::post('postOrderDetail', 'DataController@postOrderDetail');

    //Slide show
    Route::get('getSlideShow', 'DataController@getSlideShow');
});

//Route User
Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => ['jwt']], function () {
        Route::put('editUserProfile', 'UserController@editUserProfile');
        Route::post('postReview', 'UserController@postReview');
        Route::get('getAllPurchases', 'UserController@getAllPurchases');
        Route::get('getPurchasesReceived', 'UserController@getPurchasesReceived');
        Route::get('getPurchasesConfirm', 'UserController@getPurchasesConfirm');
        Route::get('getPurchasesShipping', 'UserController@getPurchasesShipping');
        Route::get('getPurchasesCompleted', 'UserController@getPurchasesCompleted');
        Route::delete('CancelOrder', 'UserController@CancelOrder');
    });
});

//Route Admin
Route::group(['prefix' => 'admin'], function () {
    Route::middleware(['jwt', 'admin'])->group(function () {
        //User
        Route::get('all-user', 'AdminController@getAllUser');
        Route::get('statistic', 'AdminController@getStatistic');
        Route::post('addUser', 'AdminController@addUser');
        Route::put('/{id}', 'AdminController@editUser');
        Route::delete('/{id}', 'AdminController@deleteUser');

        //Notification
        Route::post('getNotificationsAdmin', 'AdminController@getNotificationsAdmin');
        Route::post('sendNotification', 'AdminController@sendNotification');
        Route::post('sendNotificationForAllUsers', 'AdminController@sendNotificationForAllUsers');
        Route::put('notification/{notificationId}', 'AdminController@editNotification');
        Route::delete('notification/{notificationId}', 'AdminController@deleteNotification');
        Route::get('getNotificationsPageNumber', 'AdminController@getNotificationsPageNumber');

        //Product
        Route::post('addProduct', 'AdminController@addProduct');
        Route::put('product/{productId}', 'AdminController@editProduct');
        Route::delete('product/{productId}', 'AdminController@deleteProduct');
        Route::post('getProductAdmin', 'AdminController@getProductAdmin');
        Route::get('getProductPageNumber', 'AdminController@getProductPageNumber');

        //Slide show
        Route::post('getSlideShowAdmin', 'AdminController@getSlideShowAdmin');
        Route::get('getSlideShowPageNumber', 'AdminController@getSlideShowPageNumber');
        Route::post('addSlideShow', 'AdminController@addSlideShow');
        Route::put('slideshow/{slideShowId}', 'AdminController@editSlideShow');
        Route::delete('slideshow/{slideShowId}', 'AdminController@deleteSlideShow');
    });
});