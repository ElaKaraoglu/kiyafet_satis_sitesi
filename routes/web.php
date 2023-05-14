<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\KategoriController;
use App\Http\Controllers\AdminPanel\UrunController;

use App\Http\Controllers\HomeController ;
use App\Http\Controllers\KullaniciController;
use App\Http\Controllers\SepetController;

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

Route::get('/',[HomeController::class,'index']);
Route::post('/admin/logincheck', [HomeController::class,'logincheck'])->name('logincheck');

Route::get('/admin/login', [HomeController::class,'login'])->name('adminlogin');
Route::get('/login', [HomeController::class,'userlogin'])->name('userlogin');
Route::get('/products/{id}', [HomeController::class,'products'])->name('products');
Route::get('/user', [KullaniciController::class,'index'])->name('userlogin');
Route::get('/user/update/{id}', [KullaniciController::class,'update'])->name('userlogin');
Route::post('/admin/product/update/{id}',[UrunController::class,'update'])->name('update');
Route::get('/register', [HomeController::class,'register'])->name('register');
Route::post('/userlogincheck', [HomeController::class,'userlogincheck'])->name('userlogincheck');
    Route::get('/admin/logout', [HomeController::class,'logout'])->name('adminlogout');
 Route::get('/test/{id}/{name}',[HomeController::class,'test'])->whereNumber('id')->whereAlpha('name');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


Route::prefix('shopcart')->group(function(){
    Route::get('/',[SepetController::class,'index'])->name('shopcart_index');

    Route::post('/store/{id}',[SepetController::class,'store'])->name('add_to_shopcart');

    Route::post('/update/{id}',[SepetController::class,'update'])->name('shopcart_update');

    Route::get('/delete/{id}',[SepetController::class,'destroy'])->name('shopcart_destroy');
});
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/',[AdminHomeController::class,'index'])->name('adminindex');
    Route::get('/setting',[AdminHomeController::class,'setting'])->name('setting');
    Route::post('/setting',[AdminHomeController::class,'settingupdate'])->name('setting.update');

    Route::prefix('/category')->name('category.')->controller(KategoriController::class)->group(function(){
       Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name(('store'));
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');

       });


       Route::prefix('/product')->name('product.')->controller(UrunController::class)->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name(('store'));
        Route::get('/edit/{id}','edit')->name('edit');
        //Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
       Route::get('/destroy/{id}','destroy')->name('destroy');
    });



});

/**Route::get('/category',[KategoriController::class,'index'])->name('admin_category');
Route::get('/category/create',[KategoriController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store',[KategoriController::class,'store'])->name(('admin_category_store'));
Route::get('/admin/category/edit/{id}',[KategoriController::class,'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}',[KategoriController::class,'update'])->name('admin_category_update');
Route::get('/admin/category/show/{id}',[KategoriController::class,'show'])->name('admin_category_show');
Route::get('/admin/category/destroy/{id}',[KategoriController::class,'destroy'])->name('admin_category_destroy');
Route::get('/admin/product',[UrunController::class,'index'])->name('admin_products');
Route::get('/admin/product/create',[UrunController::class,'create'])->name('admin_product_create');
Route::post('/admin/product/store',[UrunController::class,'store'])->name(('admin_product_store'));
Route::get('/admin/product/edit/{id}',[UrunController::class,'edit'])->name('admin_urun_edit');
Route::get('/admin/product/destroy/{id}',[UrunController::class,'destroy'])->name('admin_prıduct_destroy');
Route::get('/admin/product/show/{id}',[UrunController::class,'show'])->name('admin_category_show');**/
