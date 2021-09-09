<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/','FrontEnd\FrontendController@index');

// admin routes
Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware'=> ['admin','auth']],function () {
    Route::get('/dashboard',function(){
        return view('admin.users.user-list');
    })->name('admin.dashboard');
    Route::resource('users', 'UserMgtController');
    Route::get('docks-list','DockController@index')->name('docks.index');
    Route::resource('site-setting','SettingController')->except(['show','store','update','destroy','edit']);
    Route::view('settings/rent-list-setting','admin.settings.rent-list-create')->name('rent.settings');
    Route::view('settings/review-settings','admin.settings.review-settings')->name('review.settings');
    Route::get('all-rentlist-settings','SettingController@allRentList')->name('all.rentlist.settings');
    Route::get('rentlist-edit/{list}','SettingController@editRentList')->name('rent-list.edit');
    Route::PUT('rentlist-update/{list}','SettingController@updateRentList')->name('rent-list.update');
    Route::get('all-reviews-settings','SettingController@allReviewsSetting')->name('all.reviews.settings');
    Route::get('edit-review/{review}','SettingController@editReviews')->name('review.edit');
    Route::PUT('update-review/{review}','SettingController@updateReview')->name('review.update');
    Route::view('menue-settings', 'admin.settings.menue-settings')->name('menue.settings');
    Route::get('menue-settings/edit-menue/{id}','SettingController@editMenue')->name('menue.edit');
    Route::PUT('update-menue/{id}','SettingController@updateMenue')->name('menue.update');
    Route::resource('search-input-fields', 'SearchInputFieldController');
});

// payment/front-end routes with authentication
Route::group(['namespace' => 'FrontEnd','middleware' => 'auth'],function(){
    Route::get('user-profile', 'PaymentController@index')->name('user.profile')->middleware('auth');
    Route::post('paypal','PaymentController@payWithPaypal')->name('paypal'); //paypal
    Route::get('paypal','PaymentController@getPaymentStatus')->name('status'); //paypal
});

// frontend routes
Route::group(['namespace' => 'FrontEnd'],function () {
    Route::get('dock-listings/{query?}','FrontendController@allDocksListing')->name('docks.listing');
    Route::get('dock-details/{dock}','FrontendController@dockDetails')->name('dock.details');
    Route::post('dock-search/','FrontendController@searchDocks')->name('docks.search');
    Route::get('country-filter','FrontendController@countryFilter')->name('country.filter');
    Route::get('contact-us','FrontendController@contact_us')->name('contact.us');
});
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
