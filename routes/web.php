<?php

Route::get('/','HomeController@viewwelcome');

Route::get('/help', 'HomeController@viewhelp');

Route::get('/aboutus','HomeController@viewaboutus');

Route::get('/contactus','HomeController@viewcontactus');
Route::get('/news','HomeController@viewnews');
Auth::routes();
//    ----------admin-------------------------------
Route::group(['middleware' => ['web','auth']],function() {

    Route::get('/home', function () {
        if (Auth::user()->admin == 0) {
            return view('home');
        } else {
            $users['users'] = \App\User::all();
            return view('admin',$users);
        }

    });
});
    Route::get('/admin','AdminController@index')->middleware('admin');
    Route::get('/admingames','AdmingamesController@index')->middleware('admin');
    Route::post('/addgames','AdmingamesController@store')->middleware('admin');
    Route::get('/admincategory','AdmincategoryController@index')->middleware('admin');
    Route::get('/adminaddcategory','AdmincategoryController@form')->middleware('admin');
    Route::post('/addcategory','AdmincategoryController@store')->middleware('admin');
    Route::get('/admingamesedit','AdmingamesController@show')->middleware('admin');
    Route::get('/admingamesdelete/{id}','AdmingamesController@destroy')->middleware('admin');
    Route::get('/admingameschange/{id}','AdmingamesController@change')->middleware('admin');
    Route::post('/admingamesupdate/{id}','AdmingamesController@update')->middleware('admin');
    Route::get('/editcategory/{id}','AdminCategoryController@edit')->middleware('admin');
    Route::post('/updatecategory/{id}','AdminCategoryController@update')->middleware('admin');
    Route::get('/deletecategory/{id}','AdminCategoryController@destroy')->middleware('admin');
    Route::get('/adminedituser','AdminController@index')->middleware('admin');
    Route::get('/adminaccessory','AccessoryController@index')->middleware('admin');
    Route::get('/editaccessory/{id}','AccessoryController@edit')->middleware('admin');
    Route::post('/updateaccessory/{id}','AccessoryController@update')->middleware('admin');
    Route::get('/accessoryform','AccessoryController@form')->middleware('admin');
    Route::post('/addaccessory','AccessoryController@store')->middleware('admin');
    Route::get('/delaccessory/{id}','AccessoryController@destroy')->middleware('admin');
    Route::get('/adminnews','NewsController@index')->middleware('admin');
    Route::get('/showform','NewsController@show')->middleware('admin');
    Route::post('/addnews','NewsController@store')->middleware('admin');
    Route::post('/updatenews/{id}','NewsController@update')->middleware('admin');
    Route::get('/deletenews/{id}','NewsController@destroy')->middleware('admin');
    Route::get('/editnews/{id}','NewsController@edit')->middleware('admin');
    Route::get('/datadel/{id}','AdminController@destroy');
    Route::get('/update/{id}','AdminController@update');
    Route::get('/edit/{id}','AdminController@edit');

//    ---------------------admin---------------------

//    --------------user--------------------------
    Route::get('/games','GameController@index');
    Route::get('/gamedetails/{id}','GameController@details');
    Route::get('/userprofile','UserprofileController@index');
    Route::get('/edituserprofile/{id}','UserprofileController@edit');
    Route::get('/deleteuserprofile/{id}','UserprofileController@destroy');
    Route::get('/shooting','ShootingController@index');
    Route::get('/rpg','RpgController@index');
    Route::get('/racing','RacingController@index');
    Route::get('/accessory','AccessoryController@show');
    Route::get('/accessorydetails/{id}','AccessoryController@details');
//    ------------------shop-------------------------



Route::get('/shop','ShoppingController@index');
Route::get('/post','PostController@index');
Route::get('/viewposts/{id}','PostController@show');
Route::get('/delpost/{id}','PostController@destroy');
Route::post('/addposts','PostController@store');
Route::post('/addcomment', 'CommentController@store');
Route::get('/addwishlist','WishlistController@store');
Route::get('/wishlist/{id}','WishlistController@show');
Route::get('/deletewishlist/{id}','WishlistController@destroy');
Route::get('/deleteaccwishlist/{id}','AccwishlistsController@destroy');
Route::get('/viewwishlist','WishlistController@view');
Route::get('/wishlist/{id}','WishlistController@show');
Route::get('/addaccwishlist','AccwishlistsController@store');
Route::get('/accwishlist/{id}','AccwishlistsController@show');
Route::get('/ordernow/{id}','OrderController@store');
Route::get('/adminorders','OrderController@index')->middleware('admin');
Route::get('/deliverorder/{id}','OrderController@destroy');
Route::get('/addcomments','CommentController@store');
Route::get('/addreply','ReplyController@store');
Route::get('/viewreply/{id}','ReplyController@show');
Route::get('/orderview','OrderController@view');
Route::get('/orderitem/{id}','OrderController@show');
Route::post('/addreview','ReviewController@store');
Route::post('/accreview','AccreviewController@store');


//------------------shop-------------------------