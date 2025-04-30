<?php

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

Route::get('/', 'App\Http\Controllers\WelcomeController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('page/{page}', 'App\Http\Controllers\PagesController@show');

Route::get('all-courses', 'App\Http\Controllers\CoursesController@allCourses');

Route::get('course/{course}', 'App\Http\Controllers\CoursesController@show');

Route::get('contact', 'App\Http\Controllers\PagesController@contact')->name('contact-view');

Route::post('contact/send-email', 'App\Http\Controllers\MailController@sentEmail')->name('contact.send-email');

Route::get('blog', 'App\Http\Controllers\BlogController@index')->name('blog.index');

Route::get('blog/post/{blog}', 'App\Http\Controllers\BlogController@show');

Route::get('blog/category/{category}', 'App\Http\Controllers\BlogController@categoryShow');

Route::get('galleries', 'App\Http\Controllers\GalleriesController@view');

Route::post('/autocomplete-course/fetch', 'App\Http\Controllers\CoursesController@searchResultFetch')->name('autocomplete-course.fetch');



Route::middleware(['auth'])->group(function(){

    Route::get('courses/courses-list', 'App\Http\Controllers\CoursesController@coursesList')->name('courses.list');

    Route::post('courses/courses-list-sort', 'App\Http\Controllers\CoursesController@coursesListSort')->name('courses.list-sort');

    Route::resource('courses', 'App\Http\Controllers\CoursesController');

    Route::resource('posts', 'App\Http\Controllers\PostsController');

    Route::resource('categories', 'App\Http\Controllers\CategoriesController');

    Route::resource('announcements', 'App\Http\Controllers\AnnouncementsController');

    Route::post('course-types/course-type-sort', 'App\Http\Controllers\CourseTypesController@courseTypeSort')->name('course-type-sort');

    Route::resource('course-types', 'App\Http\Controllers\CourseTypesController');

    Route::get('trashed-courses', 'App\Http\Controllers\CoursesController@trashed')->name('trashed-courses.index');

    Route::put('restore-course/{course}', 'App\Http\Controllers\CoursesController@restore')->name('restore-courses');

    Route::get('pages', 'App\Http\Controllers\PagesController@index')->name('pages.index');

    Route::get('pages/create', 'App\Http\Controllers\PagesController@create')->name('pages.create');

    Route::post('pages/store', 'App\Http\Controllers\PagesController@store')->name('pages.store');

    Route::get('pages/{page}/edit', 'App\Http\Controllers\PagesController@edit')->name('pages.edit');

    Route::put('pages/{page}', 'App\Http\Controllers\PagesController@update')->name('pages.update');

    Route::post('ck/upload', 'App\Http\Controllers\CkeditorController@ckUpload')->name('ck.upload');

    Route::post('/image-upload', 'App\Http\Controllers\CkeditorController@imageUpload')->name('tinymce.upload');

    Route::get('pages/{pages}/delete', 'App\Http\Controllers\PagesController@destroy')->name('pages.destroy');

    Route::get('pages/nav-list', 'App\Http\Controllers\PagesController@navList')->name('pages.nav-list');

    Route::post('pages/nav-list-sort', 'App\Http\Controllers\PagesController@navListSort')->name('pages.nav-list-sort');

    Route::resource('blocks', 'App\Http\Controllers\BlocksController');

    Route::get('company-details', 'App\Http\Controllers\CompanyDetailsController@index')->name('company.index');

    Route::put('company-details/update', 'App\Http\Controllers\CompanyDetailsController@update')->name('company-details.update');

    Route::get('instructors/instructors-list', 'App\Http\Controllers\InstructorsController@instructorsList')->name('instructors.list');

    Route::post('instructors/instructors-list-sort', 'App\Http\Controllers\InstructorsController@instructorsListSort')->name('instructors.list-sort');

    Route::resource('instructors', 'App\Http\Controllers\InstructorsController');

    Route::get('blog/create', 'App\Http\Controllers\BlogController@create')->name('blog.create');

    Route::put('blog/{blog}', 'App\Http\Controllers\BlogController@update')->name('blog.update');

    Route::get('gallery', 'App\Http\Controllers\GalleriesController@general')->name('gallery.general');

    Route::get('gallery/index', 'App\Http\Controllers\GalleriesController@index')->name('gallery.index');

    Route::put('gallery/{gallery}', 'App\Http\Controllers\GalleriesController@update')->name('gallery.update');

    Route::get('gallery/create', 'App\Http\Controllers\GalleryListsController@create')->name('gallery.create');

    Route::put('gallery/gallery-list/{gallery}', 'App\Http\Controllers\GalleryListsController@update')->name('gallery-list.update');

    Route::get('gallery/{gallery}/edit', 'App\Http\Controllers\GalleryListsController@edit')->name('gallery.edit');

    Route::post('gallery/store', 'App\Http\Controllers\GalleryListsController@store')->name('gallery.store');

    Route::get('gallery/{gallery}/upload', 'App\Http\Controllers\GalleryListsController@upload')->name('gallery.upload');

    Route::post('gallery/{gallery}/image-upload', 'App\Http\Controllers\GalleryImagesController@imageUpload')->name('gallery.image-upload');

    Route::get('gallery/gallery-list', 'App\Http\Controllers\GalleryListsController@galleryList')->name('gallery.list');

    Route::post('gallery/gallery-list-sort', 'App\Http\Controllers\GalleryListsController@galleryListSort')->name('gallery.nav-list-sort');

    Route::get('gallery/{gallery}/delete', 'App\Http\Controllers\GalleryListsController@destroy')->name('gallery.destroy');

    Route::get('gallery/{gallery}/list-view', 'App\Http\Controllers\GalleryImagesController@index')->name('gallery.single-list-view');

    Route::get('gallery/list-view/{gallery}/delete', 'App\Http\Controllers\GalleryImagesController@destroy')->name('gallery.single-list-view.destroy');

    Route::get('effects', 'App\Http\Controllers\EffectsController@index')->name('effects.index');

    Route::post('effects/update', 'App\Http\Controllers\EffectsController@update')->name('effects.update');

    Route::get('enquiries', 'App\Http\Controllers\MailController@index')->name('enquiries.index');

    Route::get('enquiries/show/{id}', 'App\Http\Controllers\MailController@show')->name('enquiry.show');

    Route::get('enquiries/{id}/delete', 'App\Http\Controllers\MailController@destroy')->name('enquiry.destroy');

    Route::get('enquiries/export/csv', 'App\Http\Controllers\MailController@exportCsv')->name('enquiries.export');

    Route::get('logo-slider', 'App\Http\Controllers\LogoSliderController@index')->name('logo-slider.index');

    Route::put('logo-slider/{id}/update', 'App\Http\Controllers\LogoSliderController@update')->name('logo-slider.update');

    Route::post('logo-slider/logos-sort', 'App\Http\Controllers\LogoSliderController@logoSort')->name('logos-sort');

    Route::get('logo-slider/create', 'App\Http\Controllers\LogoSliderController@create')->name('logo.create');

    Route::post('logo-slider/store', 'App\Http\Controllers\LogoSliderController@store')->name('logo.store');

    Route::delete('logo-slider/{id}/delete', 'App\Http\Controllers\LogoSliderController@destroy')->name('logo.destroy');

    Route::get('clear-cache', function() {
        Artisan::call('optimize:clear');
        return redirect()->back();
    });
    
});

Route::middleware(['auth','VerifyAdmin'])->group(function(){
    Route::get('users', 'App\Http\Controllers\UsersController@index')->name('users.index');

    // Route::get('users/create', 'App\Http\Controllers\UsersController@create')->name('users.create');

    // Route::get('users/store', 'App\Http\Controllers\UsersController@store')->name('users.store');

    Route::get('users/{user}/edit', 'App\Http\Controllers\UsersController@edit')->name('users.edit');

    Route::put('users/{user}/update', 'App\Http\Controllers\UsersController@update')->name('users.update');

    Route::post('users/{user}/make-admin', 'App\Http\Controllers\UsersController@makeAdmin')->name('users.make-admin');

    Route::get('users/{userId}/delete', 'App\Http\Controllers\UsersController@destroy')->name('users.destroy');

    Route::post('users/{userId}', 'App\Http\Controllers\UsersController@updatePassword')->name('users.update-password');
});