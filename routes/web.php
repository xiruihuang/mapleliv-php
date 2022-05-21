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




Route::get('/', 'FrontController@index');
Route::get('/home', 'FrontController@index');

Auth::routes();
Route::get('alert/{AlertType}','sweetalertController@alert')->name('alert');

Route::post('phone_login','Auth\LoginController@login');


//mobile
Route::get('/mobile', 'FrontController@mobile');
Route::get('/my', 'FrontController@my');
Route::get('/history', 'FrontController@history');
Route::get('/addFavorite/{id}', 'HousingController@addFavorite');
Route::get('/mobileAbout', 'FrontController@mobileAbout');
Route::get('/mobileTeam', 'FrontController@mobileTeam');
Route::get('/mobileContact', 'FrontController@mobileContact');

//admin
Route::get('/admin', 'AdminController@admin');


//user management
Route::get('/showAllGenUsers', 'UserController@showAllGenUsers');
Route::get('/showAllMarketUsers', 'UserController@showAllMarketUsers');
Route::get('/showAllTypes', 'UserController@showAllTypes');
Route::get('/createTypes', 'UserController@createTypes');
Route::post('/postTypes', 'UserController@postTypes');


Route::get('/showAllGenHousing', 'HousingManaController@showAllGenHousing');
Route::get('/showAllRentkeyaHousing', 'HousingManaController@showAllRentkeyaHousing');
Route::get('/finish/{id}', 'HousingManaController@finish');

Route::get('/showAllProfit', 'ProfitController@showAllProfit');

Route::get('/addGenProperty', 'HousingController@addGenProperty');
Route::post('/createGenProperty', 'HousingController@createGenProperty');
Route::get('/property', 'HousingController@rentkeyaProperty');
Route::get('/propertyArea/{id}', 'HousingController@propertyArea');
Route::get('/genProperty', 'HousingController@genProperty');
Route::get('/addRentkeyaProperty', 'HousingController@addRentkeyaProperty');
Route::post('/createRentkeyaProperty', 'HousingController@createRentkeyaProperty');
Route::get('/showAgent','FrontController@showAgent');
Route::get('/aboutUs', 'FrontController@aboutUs');
Route::get('/detail/{id}', 'HousingController@detail');
Route::get('/generalProperty', 'HousingController@generalProperty');
Route::get('/search', 'HousingController@search');
Route::get('/contactUs', 'FrontController@contactUs');
Route::post('/sentMessage', 'FrontController@sentMessage');
Route::get('/showList', 'HousingController@showList');
Route::get('/edit/{id}', 'HousingController@edit');
Route::post('/editRentkeyaHousing/{id}', 'HousingController@editRentkeyaHousing');
Route::post('/editGenProperty/{id}', 'HousingController@editGenProperty');
Route::post('/editGenPropertyPho/{id}', 'HousingController@editGenPropertyPho');
Route::get('/refresh/{id}', 'HousingController@refresh');
Route::get('/photoControl/{id}','HousingController@photoControl');
Route::get('/userdelete/{id}','HousingController@userdelete');
Route::post('/editRentkeyaHousingPhoto/{id}', 'HousingController@editRentkeyaHousingPhoto');

Route::get('/verifyMarketing/{id}', 'UserController@verifyMarketing');
Route::get('/verifyGeneral/{id}', 'UserController@verifyGeneral');

//后台市场部签到系统
Route::get('/showAllSignIn','SignController@showAllSignIn');
Route::get('/signIn', 'SignController@signIn');
Route::get('/signOut','SignController@signOut');
//后台市场部发房管理
Route::get('/addMarketingHousing', 'MarketingHousingController@addMarketingHousing');
Route::get('/showAllMarketingHousing', 'MarketingHousingController@showAllMarketingHousing');
Route::get('/marketingPosting/{id}', 'MarketingHousingController@marketingPosting');
Route::get('/marketingDeleting/{id}', 'MarketingHousingController@marketingDeleting');
Route::get('/marketingUserPosting', 'MarketingHousingController@marketingUserPosting');
Route::get('/editMarketingPosting/{id}', 'MarketingHousingController@editMarketingPosting');
Route::get('/marketingHousingDetail/{id}', 'MarketingHousingController@marketingHousingDetail');
Route::get('/goBack', 'MarketingHousingController@goBack');
Route::get('/live', 'MarketingHousingController@live');
Route::get('/dead', 'MarketingHousingController@dead');
Route::get('/addMarketingPictures/{id}','MarketingHousingController@addMarketingPictures');
Route::post('/uploadMarketingPictures/{id}','MarketingHousingController@uploadMarketingPictures');
Route::get('/modifiedPictures/{id}', 'MarketingHousingController@modifiedPictures');
Route::post('/modifiedPicture/{id}', 'MarketingHousingController@modifiedPicture');
Route::get('/showAllWorkingHours', 'SignController@showAllWorkingHours');
//后台市场部租客管理
Route::get('/showAllRenter', 'RenterController@showAllRenter');
Route::get('/createRenter', 'RenterController@createRenter');
Route::post('/uploadRenter', 'RenterController@uploadRenter');
Route::get('/deletingRenter/{id}', 'RenterController@deletingRenter');
Route::get('/renterDetail/{id}', 'RenterController@renterDetail');
Route::get('/editRenter/{id}', 'RenterController@editRenter');
Route::post('/updateRenter/{id}', 'RenterController@updateRenter');

Route::get('/filter','HousingController@filter');
Route::get('/genFilter', 'HousingController@genFilter');

//广告管理系统
Route::get('/addAds', 'AdsManagementController@create');
Route::post('/postAds', 'AdsManagementController@store');
Route::get('/showAllAds', 'AdsManagementController@show');
Route::get('/adsUpdating/{id}', 'AdsManagementController@edit');
Route::get('/adsRemove/{id}', 'AdsManagementController@remove');

//签到新的系统
Route::get('/newSignIn', 'NewSignController@signIn');
Route::get('/newSignOut','NewSignController@signOut');
Route::get('/signPage', 'NewSignController@signPage');
Route::get('/showAllSign', 'NewSignController@showAllSign');
Route::get('/getTotalHour', 'NewSignController@getTotalHour');

//map
Route::get('/showMap', 'MapController@showMap');
Route::get('/showAreaMap/{id}', 'MapController@showAreaMap');

Route::get('/form', 'SendForm@form');
Route::get('/form-en', 'SendForm@formEn');
Route::post('/sendForm', 'SendForm@sendForm');

