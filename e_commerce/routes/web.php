<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\CartPageController;
use App\Http\Controllers\User\checkoutController;
use App\Http\Controllers\User\CashController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\ShippingController;
use App\Http\Controllers\Backend\StoreSettingController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Admin

Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function(){
    Route::get('/login',[AdminController::class,'loginform']);
    Route::post('/login',[AdminController::class,'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/admin/logout',[AdminController::class,'destroy'])->name('admin.logout');

Route::get('/admin/profile',[BrandController::class,'AProfile'])->name('admin.profile');

                                 // USER//
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/',[IndexController::class,'index']);

//user dashboard
Route::get('/user/logout',[IndexController::class,'ULogout'])->name('user.logout');

Route::get('/user/profile',[IndexController::class,'UProfile'])->name('user.profile');

Route::post('/user/profile-update',[IndexController::class,'UProfileUpdate'])->name('userprofile.update');

Route::get('/user/recentorder',[IndexController::class,'URecentOrder'])->name('user.order');

// Route::get('/user/Orderdetails/{order_id}',[IndexController::class,'OrderDetails']);

                             // Admin Part //
//Brand

Route::prefix('brand')->group(function(){

    Route::get('/view',[BrandController::class,'Brandview'])->name('all.brand');

    Route::post('/store',[BrandController::class,'Brandstore'])->name('brand.store');

    Route::get('/edit/{id}',[BrandController::class,'EditBrand'])->name('brand.edit');

    Route::post('/update',[BrandController::class,'UpdateBrand'])->name('brand.update');

    Route::get('/delete/{id}',[BrandController::class,'delete']);
});

//Category

Route::prefix('category')->group(function(){

Route::get('/view',[CategoryController::class,'Categoryview'])->name('all.category');

Route::post('/store',[CategoryController::class,'categorystore'])->name('category.store');

Route::get('/edit/{id}',[CategoryController::class,'EditCategory'])->name('category.edit');

Route::post('/update',[CategoryController::class,'UpdateCategory'])->name('category.update');

Route::get('/delete/{id}',[CategoryController::class,'delete']);

});

//Product

Route::prefix('product')->group(function(){

  Route::get('/add',[ProductController::class,'Productadd'])->name('add.product');
            
  Route::post('/store',[ProductController::class,'Productstore'])->name('product.store');
            
  Route::get('/manage',[ProductController::class,'Manageproduct'])->name('manage.product');

  Route::get('/edit/{id}',[ProductController::class,'Editproduct'])->name('edit.product');
            
  Route::post('/update',[ProductController::class,'UpdateProduct'])->name('product.update');
            
  Route::get('/delete/{id}',[ProductController::class,'delete']);
            
});

                                    //FRONTEND//

//Product Detail
Route::get('/product/details/{id}',[IndexController::class,'ProductDetails']);

// Catalog page
Route::get('/product/catalog',[IndexController::class,'ProductCatalog']);

// product cart view Modal part
Route::get('/product/view/modal/{id}',[IndexController::class,'ProductviewA']);

//product to cart
Route::post('/cart/data/store/{id}',[CartController::class,'AddToCart']);

//get data from mini cart
Route::get('/product/mini/cart/',[CartController::class,'AddMinicart']);

// remove miniCart
Route::get('/minicart/product-remove/{rowId}',[CartController::class,'RemoveMiniCart']);

//Add to wishlist
Route::post('/add-to-wishlist/{product_id}',[CartController::class,'AddToWishlist']);



Route::group(['prefix'=>'user','middleware'=> ['user','auth'],'namespace'=>'User'],
  function(){
      //wishlist url
Route::get('/wishlist',[WishlistController::class,'Wishlist'])->name('wishlist');

//wishlist add
Route::get('/get-wishlist-product',[WishlistController::class,'WishlistGet']);

// remove wishlist
Route::get('/wishlist-remove/{id}',[WishlistController::class,'RemoveWishlist']);

// remove myOrders page 
Route::get('/cart-myOrders',[CartPageController::class,'myOrders'])->name('cart');

// add myorders
Route::get('/get-cart-products',[CartPageController::class,'getCartProduct']);

// remove cart product
Route::get('/cart-remove/{id}',[CartPageController::class,'RemoveCartProduct']);

// checkoutcall
Route::get('/checkoutcall',[CartPageController::class,'checkoutCall']);

// Card payment
Route::post('/card/order',[CardController::class,'cardPayment'])->name('card.order');

//Cash payment
Route::post('/cash/order',[CashController::class,'cashPayment'])->name('cash.order');
  });

// Checkout from cart 
Route::get('/checkout',[CartPageController::class,'Checkout'])->name('checkout');  

// place order 
Route::post('/placeorder',[checkoutController::class,'placeOrder'])->name('place.order'); 


// Admin side order report

Route::prefix('report')->group(function(){

  Route::get('/view',[ReportController::class,'Reportview'])->name('All.report');

  Route::post('/search',[ReportController::class,'ReportSearch'])->name('searchByDate');

});

//Shipping

Route::get('/shipping',[ShippingController::class,'Shipping'])->name('view.shipping');

Route::post('/shipping/add',[ShippingController::class,'AddShipping'])->name('shipping.store');

//Store Setting
Route::get('/store/setting',[StoreSettingController::class,'StoreSetting'])->name('store.setting');

Route::post('/setting_Add',[StoreSettingController::class,'AddSetting'])->name('setting.store');

Route::get('/edit/{id}',[StoreSettingController::class,'EditSetting'])->name('edit.Setting');

Route::post('/update',[StoreSettingController::class,'UpdateSetting'])->name('setting.update');

Route::get('/delete/{id}',[StoreSettingController::class,'delete']);
