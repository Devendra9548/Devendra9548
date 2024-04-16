<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\backendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [frontendController::class, 'home'])->name('front.home');
Route::get('/home', [frontendController::class, 'home'])->name('front.home');
Route::get('/expertise', [frontendController::class, 'expertise'])->name('front.expertise');
Route::get('/resources', [frontendController::class, 'resources'])->name('front.resources');
Route::get('/services', [frontendController::class, 'services'])->name('front.services');
Route::get('/insights', [frontendController::class, 'insights'])->name('front.insights');
Route::get('/about', [frontendController::class, 'about'])->name('front.about');
Route::get('/blog', [frontendController::class, 'blog'])->name('front.blog');
Route::get('/contact-us', [frontendController::class, 'contact'])->name('front.contact');
Route::post('/contact-us', [frontendController::class, 'sendcontact']);
Route::get('/submit-cv', [frontendController::class, 'submitcv'])->name('front.submitcv');
Route::get('/executive-careers', [frontendController::class, 'ecareers'])->name('front.ecareers');
Route::get('/blog/{slug}', [frontendController::class, 'singleblog'])->name('front.singleblog');


Route::prefix('/admin')->group(function(){
  Route::get('/',[backendController::class, 'login']);
  Route::get('/dashboard',[backendController::class, 'dashboard'])->name('dashboard');
  Route::post('/login',[backendController::class, 'checklogin'])->name('login');
  Route::get('/logout',[backendController::class, 'logout'])->name('logout');

  Route::get('/all-blogs',[backendController::class, 'allblogs'])->name('all-blogs');
  Route::get('/add-blog',[backendController::class, 'addblog'])->name('add-blog');
  Route::post('/add-blog',[backendController::class, 'wpaddblog'])->name('wpadd-blog');
  Route::post('/update-blog',[backendController::class, 'UpdateBlog']);
  Route::get('/edit-blog/{id}',[backendController::class, 'editblog']);
  Route::delete('/delete-blog/{id}',[backendController::class, 'DeleteBlog']);

  Route::get('/all-blogs-categories',[backendController::class, 'allcategories'])->name('all-blogs-categories');
  Route::get('/add-blog-category',[backendController::class, 'addcategory'])->name('add-blog-category');
  Route::post('/add-blog-category',[backendController::class, 'wpaddcategory'])->name('wpadd-blog-category');
  Route::post('/update-blog-category',[backendController::class, 'UpdateBlogCategory']);
  Route::get('/edit-blog-categories/{id}',[backendController::class, 'editblogcategories']);
  Route::delete('/delete-blog-categories/{id}',[backendController::class, 'DeleteBlogCategory']);
  
  Route::get('/all-jobs',[backendController::class, 'alljobs'])->name('all-jobs');
  Route::get('/add-jobdetail',[backendController::class, 'addjobdetail'])->name('add-jobdetail');
  Route::post('/add-jobdetail',[backendController::class, 'wpaddjobdetail'])->name('wpadd-jobdetail');
  Route::post('/update-jobdetail',[backendController::class, 'UpdateJobdetail']);
  Route::get('/edit-jobdetail/{id}',[backendController::class, 'editJobdetail']);
  Route::delete('/delete-jobdetail/{id}',[backendController::class, 'DeleteJobdetail']);

  Route::get('/all-functions',[backendController::class, 'allfunctions'])->name('all-functions');
  Route::post('/add-functions',[backendController::class, 'wpaddfunction']);
  Route::post('/update-function',[backendController::class, 'Updatefunction']);
  Route::get('/edit-function/{id}',[backendController::class, 'editfunction']);
  Route::delete('/delete-function/{id}',[backendController::class, 'Deletefunction']);

  Route::get('/all-industries',[backendController::class, 'allIndustries'])->name('all-industries');
  Route::post('/add-industry',[backendController::class, 'wpaddIndustry']);
  Route::post('/update-industry',[backendController::class, 'UpdateIndustry']);
  Route::get('/edit-industry/{id}',[backendController::class, 'editIndustry']);
  Route::delete('/delete-industry/{id}',[backendController::class, 'DeleteIndustry']);

  Route::get('/post-seo/{id}',[backendController::class, 'postseo'])->name('postseo');
  Route::post('/post-seo',[backendController::class, 'wpaddpostseo']); 

  Route::get('/post-cat-seo/{id}',[backendController::class, 'postcatseo'])->name('postcatseo');
  Route::post('/post-cat-seo',[backendController::class, 'wpaddpostcatseo']); 

  Route::get('/global-seo',[backendController::class, 'globalseo'])->name('global-seo'); 
  Route::post('/global-seo',[backendController::class, 'wpglobalseo'])->name('wp-global-seo'); 

  Route::get('/admin-info',[backendController::class, 'admininfo'])->name('admin-info'); 
  Route::post('/admin-info',[backendController::class, 'wpadmininfo'])->name('wp-admin-info'); 

  Route::get('/page-seo',[backendController::class, 'pageseo'])->name('page-seo'); 
  Route::get('/add-page',[backendController::class, 'getpage'])->name('add-page'); 
  Route::post('/add-page',[backendController::class, 'addpage']); 
  Route::get('/edit-page/{id}',[backendController::class, 'geteditpage']); 
  Route::post('/update-page',[backendController::class, 'updatepageseo']); 
  Route::get('/delete-page/{id}',[backendController::class, 'deletepageseo']); 

  

});

