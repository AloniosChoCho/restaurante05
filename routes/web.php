<?php

use App\Cuestions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'IndexController@index')->name('Index');

Route::get('/about', 'AboutController@index')->name('About');
Route::get('/add-history', 'AboutController@addHistory')->name('add-history');
Route::post('/store-about-history', 'AboutController@storeAboutHistory');
Route::post('/update-about-history', 'AboutController@updateAboutHistory');
Route::post('/history-update-state','AboutController@updateState');

Route::get('/reservation', 'ReservationController@index')->name('Reservation');
Route::get('/menu1', 'Menu1Controller@index')->name('Menu1');
Route::get('/menu2', 'Menu2Controlle@index')->name('Menu2');

// Route::get('/blogright', 'BlogRightController@index')->name('Blog Right');
// Route::get('/blogleft', 'BlogLeftController@index')->name('Blog Left');
// Route::get('/blogfull', 'BlogFullControlle@index')->name('Blog Full');
Route::get('/blogsingle', 'BlogSinglControlle@index')->name('Blog Single');
Route::resource('/blog-comments', 'BlogCommentController')->only([ 'index' , 'store', 'destroy']);
Route::post('/blog-comments/is-active/{blog_comment}', 'BlogCommentController@updateIsActive')->name('blog-comments.update-is-active');


Route::get('/short', 'ShortCodeController@index')->name('Short Code');
Route::get('/gallery', 'GalleryController@index')->name('Gallery');
Route::get('/galleryoverlay', 'GalleryOverlayController@index')->name('Gallery Overlay');
Route::get('/404', 'E404Controller@index')->name('404');


Route::get('/recipe-2', 'Recipe2Controller@index')->name('Recipe 2');
Route::get('/recipe-3', 'Recipe3Controlle@index')->name('Recipe 3');
Route::get('/recipe-4', 'Recipe4Controlle@index')->name('Recipe 4');
Route::get('/recipe-single', 'RecipeSingleControlle@index')->name('Recipe Single');

Route::get('/contact', 'ContactController@index')->name('Contact');
route::resource('/contact-message', 'ContactMessageController');
route::post('/contact-message/is-active/{contact_message}', 'ContactMessageController@updateIsActive')->name('contact-message.update-is-active');

Route::get('/faq', 'FaqController@index')->name('faq');

Route::get('/dashboard','DashboardController@index')->name ('Dashboard');
Route::get('/inbox','InboxController@index')->name ('Inbox');
Route::get('/email','EmailController@index')->name ('Email');
Route::get('/ecompose','EcomposeController@index')->name ('Compose');
Route::get('/start','StarterController@index')->name ('Start');

Route::get('/users','UserController@index')->name('users');
Route::post('/user-store','UserController@store');
Route::post('/user-update','UserController@update');
Route::post('/user-update-state','UserController@updateState');


Route::get('/page-reservation','ReservationController@pageReservation')->name('page-reservation');
Route::get('/page-reservation-edit','ReservationController@pageReservationEdit');
Route::post('/page-reservation-update','ReservationController@pageReservationUpdate');
Route::get('/page-quote','ReservationController@pagequote')->name('page-quote');
Route::get('/page-quote-edit','ReservationController@pagequoteedit');
Route::post('/page-quote-update','ReservationController@pagequoteUpdate');

Route::get('/page-menu', 'Menu2Controlle@pageMenu')->name('page-menu');
Route::get('/page-menu-edit','Menu2Controlle@pageMenuEdit');
Route::post('/page-menu-update','Menu2Controlle@pageMenuUpdate');


Route::prefix('page')->group(function () {
  Route::resource('menu-list', 'MenuListController')->except(['destroy', 'show']);
  Route::post('menu-list/is-active/{menu_list}', 'MenuListController@updateIsActive')->name('menu-list.update-is-active');

  Route::resource('sub-menu-list', 'SubMenuListController')->except(['destroy', 'show']);
  Route::post('sub-menu-list/is-active/{sub_menu_list}', 'SubMenuListController@updateIsActive')->name('sub-menu-list.update-is-active');

  route::resource('blog-list','BlogController')->except(['destroy','show']);

  route::resource('sub-blog-list' , 'SubBlogController');

  route::resource('contact' , 'ContactUsController' );
  Route::resource('contact-direct' ,  'ContactDirectController');

  route::resource('cuestions' , 'CuestionsController');
  route::resource('faq-cuestions' , 'FaqCuestionsController')->except(['show']);
  route::post('faq-cuestions/is-active/{faq_cuestion}' , 'FaqCuestionsController@updateIsActive')->name('faq-cuestions.update-is-active');
});


Route::get('/page-list-edit','MenuListController@pageEditlist');
Route::post('/page-list-update','MenuListController@pageListUpdate');

Route::get('/page-about','AboutController@page')->name('page-about');
Route::post('/update-page-about','AboutController@updatePageAbout')->name('update-page-about');
