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
        //Profile
        Route::put('editUserProfile', 'UserController@editUserProfile');

        //Review
        Route::post('postReview', 'UserController@postReview');

        //Purchases
        Route::get('getAllPurchases', 'UserController@getAllPurchases');
        Route::get('getPurchasesReceived', 'UserController@getPurchasesReceived');
        Route::get('getPurchasesConfirm', 'UserController@getPurchasesConfirm');
        Route::get('getPurchasesShipping', 'UserController@getPurchasesShipping');
        Route::get('getPurchasesCompleted', 'UserController@getPurchasesCompleted');
        Route::delete('CancelOrder', 'UserController@CancelOrder');

        //Notification
        Route::get('getNotifications', 'UserController@getNotifications');
        Route::post('postFeedback', 'UserController@postFeedback');
        Route::put('seenNotification', 'UserController@seenNotification');
    });
});

//Route Admin
Route::group(['prefix' => 'admin'], function () {
    Route::middleware(['jwt', 'admin'])->group(function () {
        //User
        Route::post('getUserAdmin', 'AdminController@getUserAdmin');
        Route::get('all-user', 'AdminController@getAllUser');
        Route::post('addUser', 'AdminController@addUser');
        Route::put('/{id}', 'AdminController@editUser');
        Route::delete('/{id}', 'AdminController@deleteUser');

        //Notification
        Route::post('getFeedbackAdmin', 'AdminController@getFeedbackAdmin');
        Route::post('getNotificationsAdmin', 'AdminController@getNotificationsAdmin');
        Route::post('sendNotification', 'AdminController@sendNotification');
        Route::post('sendNotificationForAllUsers', 'AdminController@sendNotificationForAllUsers');
        Route::put('notification/{notificationId}', 'AdminController@editNotification');
        Route::delete('notification/{notificationId}', 'AdminController@deleteNotification');

        //Product
        Route::post('getProductAdmin', 'AdminController@getProductAdmin');
        Route::get('getAllProductAdmin', 'AdminController@getAllProductAdmin');
        Route::post('addProduct', 'AdminController@addProduct');
        Route::put('product/{productId}', 'AdminController@editProduct');
        Route::delete('product/{productId}', 'AdminController@deleteProduct');

        //Order
        Route::post('getPurchasesReceivedAdmin', 'AdminController@getPurchasesReceivedAdmin');
        Route::post('getPurchasesConfirmAdmin', 'AdminController@getPurchasesConfirmAdmin');
        Route::post('getPurchasesShippingAdmin', 'AdminController@getPurchasesShippingAdmin');
        Route::post('getPurchasesCompletedAdmin', 'AdminController@getPurchasesCompletedAdmin');
        Route::put('/order/editPurchasesAdmin', 'AdminController@editPurchasesAdmin');
        Route::delete('/order/deletePurchasesAdmin', 'AdminController@deletePurchasesAdmin');

        //Slide show
        Route::post('getSlideShowAdmin', 'AdminController@getSlideShowAdmin');
        Route::post('addSlideShow', 'AdminController@addSlideShow');
        Route::put('slideshow/{slideShowId}', 'AdminController@editSlideShow');
        Route::delete('slideshow/{slideShowId}', 'AdminController@deleteSlideShow');
    });
});