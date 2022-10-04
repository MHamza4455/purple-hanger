<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatogeryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\AuthController;
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
//Frontend Routes  
    Route::get('/', [IndexController::class,'index'])->name('indexHome');
    Route::get('/about', [IndexController::class,'about'])->name('about');
    Route::get('/services', [IndexController::class,'services'])->name('services');
    Route::get('/shop', [IndexController::class, 'shop'])->name('shop');
    Route::get('/shopGrid', [IndexController::class, 'shopGrid'])->name('shopGrid');
    Route::get('/blog', [IndexController::class, 'blog'])->name('blog');
    Route::get('/blogGrid', [IndexController::class, 'blogGrid'])->name('blogGrid');
    Route::get('/blogDetails', [IndexController::class, 'blogDetails'])->name('blogDetails');
    Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
    Route::get('/servicesDetails', [IndexController::class, 'servicesDetails'])->name('servicesDetails');
    Route::get('/checkOut', [IndexController::class, 'checkOut'])->name('checkOut');
    Route::get('/productDetails/{id}', [IndexController::class, 'productDetails'])->name('productDetails');
    Route::get('/modalView/{id}', [IndexController::class, 'modalView'])->name('modalView');
    Route::get('/FrontendLogin', [IndexController::class, 'FrontendLogin'])->name('FrontendLogin');
    Route::get('/Check/Frontend/user', [IndexController::class, 'checkFrontendUser'])->name('checkFrontendUser');
    //cart
    Route::get('cart', [cartController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [cartController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [cartController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [cartController::class, 'remove'])->name('remove.from.cart');
    //Order
    Route::get('/storeOrder', [OrderController::class, 'storeOrder'])->name('storeOrder');

//Admin Routes


Route::group(['prefix'=>'admin'],function(){
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
    Route::get('registration', [AuthController::class, 'registration'])->name('register');
    Route::get('/admin/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Auth::routes();

    //blog
    Route::get('/blogAdd' ,[blogController::class, 'blogAdd'])->name('blogAdd');
    Route::post('/blogStore', [blogController::class, 'blogStore'])->name('blogStore');
    Route::get('/blogList', [blogController::class, 'blogList'])->name('blogList');
    Route::get('/blog/delete/{id}', [blogController::class, 'blogDelete'])->name('blogDelete');;
    Route::get('/blog/edit/{id}', [blogController::class, 'blogEdit'])->name('blogEdit');;
    Route::post('/blog/update/{id}', [blogController::class, 'blogUpdate'])->name('blogUpdate');
    //Dashboard
    Route::get('/dashboard', [CatogeryController::class, 'dashboard'])->name('dashboard');
    //Mail Settings
    Route::get('/contactus', [MailController::class, 'contactus'])->name('contactus');
    Route::post('/contactusdata', [MailController::class, 'contactData'])->name('contactusdata');
    //Manage Admin Users
    Route::group(['middleware' => ['user-permission:manage-user']], function () {
        //Manage Users
        Route::get('/addAdmin', [UserController::class, 'addAdmin'])->name('addAdmin');
        Route::post('/store/addAdmin', [UserController::class, 'storeAdmin'])->name('storeUsers');
        Route::get('/AdminListing', [UserController::class, 'AdminListing'])->name('AdminListing');
        Route::get('/userListing/delete/{id}', [UserController::class, 'userdelete']);
        Route::get('/verfyUser', [UserController::class, 'verfyUser'])->name('verfyUser');
        Route::get('/checkadmin/verify', [UserController::class, 'checkVerfiAdmin'])->name('checkVerfiAdmin');

    });
    //Manage Catogery level 1
    Route::group(['middleware' => ['user-permission:manage-catogery-level-1']], function () {
        //CatogerLevel1
        Route::get('/CatOneList', [CatogeryController::class, 'CatOneList'])->name('CatOneList');
        Route::get('/CatOneAdd', [CatogeryController::class, 'CatOneAdd'])->name('CatOneAdd');
        Route::post('/CatOneAdd', [CatogeryController::class, 'catOneStore'])->name('CatOneStore');;
        Route::get('/catOne/delete/{id}', [CatogeryController::class, 'catOnedelete'])->name('CatOnedelete');;
        Route::get('/catOne/edit/{id}', [CatogeryController::class, 'catOneEdit'])->name('CatOneEdit');;
        Route::post('/catOne/update/{id}', [CatogeryController::class, 'catOneupdate'])->name('catOneupdate');

    });
    //Manage Catogery level 2
    Route::group(['middleware' => ['user-permission:manage-catogery-level-2']], function () {
        //CatogerLevel2
        Route::get('/CatTwoList', [CatogeryController::class, 'CatTwoList'])->name('CatTwoList');
        Route::get('/CatTwoAdd', [CatogeryController::class, 'CatTwoAdd'])->name('CatTwoAdd');
        Route::post('/CatTwoAdd', [CatogeryController::class, 'catTwoStore'])->name('CatTwoStore');
        Route::get('/catTwo/delete/{id}', [CatogeryController::class, 'catTwodelete'])->name('catTwoDelete');
        Route::get('/catTwo/edit/{id}', [CatogeryController::class, 'catTwoEdit'])->name('catTwoEdit');
        Route::post('/catTwo/update/{id}', [CatogeryController::class, 'catTwoupdate'])->name('catTwoupdate');
        
    });
    //Manage Catogery level 3
    Route::group(['middleware' => ['user-permission:manage-catogery-level-3']], function () {
        //CatogerLevel3
        Route::get('/CatThreeList', [CatogeryController::class, 'CatThreeList'])->name('CatThreeList');
        Route::get('/CatThreeAdd', [CatogeryController::class, 'CatThreeAdd'])->name('CatThreeAdd');
        Route::post('/CatThreeAdd', [CatogeryController::class, 'catThreeStore'])->name('catThreeStore');
        Route::get('/catThree/delete/{id}', [CatogeryController::class, 'catThreedelete'])->name('catThreedelete');
        Route::get('/catThree/edit/{id}', [CatogeryController::class, 'catThreeEdit'])->name('catThreeEdit');
        Route::post('/catThree/update/{id}', [CatogeryController::class, 'catThreeupdate'])->name('catThreeupdate');
        Route::post('/getLevelOneFromLevelThree', [CatogeryController::class, 'getLevelOneFromLevelThree'])->name('getLevelOneFromLevelThree');
    });
    //Manage Product
    Route::group(['middleware' => ['user-permission:manage-products']], function () {
        //Product
        Route::get('/productList', [CatogeryController::class, 'productList'])->name('productList');
        Route::get('/productAdd', [CatogeryController::class, 'productAdd'])->name('productAdd');
        Route::post('/productStore', [CatogeryController::class, 'productStore'])->name('productStore');
        Route::get('/product/delete/{id}', [CatogeryController::class, 'productDelete'])->name('productDelete');
        Route::get('/product/edit/{id}', [CatogeryController::class, 'productEdit'])->name('productEdit');
        Route::post('/product/update/{id}', [CatogeryController::class, 'productupdate'])->name('productupdate');
        Route::post('/getLevelTwoFromLevelOne', [CatogeryController::class, 'getLevelTwoFromLevelOne'])->name('getLevelTwoFromLevelOne');
        Route::post('/product/change/status', [CatogeryController::class, 'changeStatus'])->name('changeStatus');
        Route::post('/getLevelThreeFromLevelproducts', [CatogeryController::class, 'getLevelThreeFromLevelproducts'])->name('getLevelThreeFromLevelproducts');
        Route::get('/bannerAdd' ,[CatogeryController::class, 'bannerAdd'])->name('bannerAdd');
        Route::post('/bannerStore', [CatogeryController::class, 'bannerStore'])->name('bannerStore');
        Route::get('/bannerList', [CatogeryController::class, 'bannerList'])->name('bannerList');
        Route::get('/map', [CatogeryController::class, 'map'])->name('map');
    });

    Route::group(['prefix' => 'banners','as' => 'banners.','middleware' => ['user-permission:manage-banners']], function () {
       
        Route::get('/', [CatogeryController::class, 'index'])->name('index');
    });
});


