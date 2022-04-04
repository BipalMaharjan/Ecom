<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Models\Brand;
use Illuminate\Contracts\View\View;
use Laravel\Socialite\Facades\Socialite;



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

Route::post('/request-to-be-vendor', [App\Http\Controllers\VendorRequestController::class, 'store'])->name('request-to-be-vendor');

Route::get('auth/social', [App\Http\Controllers\Auth\LoginController::class,'show'])->name('social.login');
Route::get('oauth/{driver}', [App\Http\Controllers\Auth\LoginController::class,'redirectToProvider'])->name('social.oauth');
Route::get('oauth/{driver}/callback', [App\Http\Controllers\Auth\LoginController::class,'handleProviderCallback'])->name('social.callback');

// Route::get('/auth/redirect', function () {
//     return Socialite::driver('github')->redirect();
// });



// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('github')->user();

//     // $user->token
// });


// Route::get('/auth/redirect', function () {
//     return Socialite::driver('facebook')->redirect();
// });

// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('facebook')->user();

//     // $user->token
// });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//spatie roles and permission
Route::group(['middleware' => ['auth']], function() {
    Route::post('/request-to-be-vendor', [App\Http\Controllers\VendorRequestController::class, 'store'])->name('request-to-be-vendor');
    Route::post('/grant-vendor', [App\Http\Controllers\VendorRequestController::class, 'grantVendor'])->name('grant-vendor');
    Route::get('/vendor-requests', [App\Http\Controllers\VendorRequestController::class, 'index'])->name('vendor-requests');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);// vendor product
    Route::resource('brands', BrandController::class);

});


Route::resource('vendors', VendorController::class);
Route::resource('categories', CategoryController::class);

//front controller
Route::get('/', [App\Http\Controllers\FrontController::class, 'front']);
Route::get('/layouts.front', [App\Http\Controllers\FrontController::class, 'categories']);

//cart
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');


//front pages

Route::get('/faq', function () {
    return view('front.faq');
});
Route::get('/offer', function () {
    return view('front.offer');
});
Route::get('/profile', function () {
    return view('front.profile');
});
Route::get('/about', function () {
    return view('front.about');
});
Route::get('/all-category', function () {
    return view('front.all-category');
});
Route::get('/blank-page', function () {
    return view('front.blank-page');
});
Route::get('/blog-author', function () {
    return view('front.blog-author');
});
Route::get('/blog-details', function () {
    return view('front.blog-details');
});
Route::get('/blog-grid', function () {
    return view('front.blog-grid');
});
Route::get('/blog-standard', function () {
    return view('front.blog-standard');
});
Route::get('/brand-list', function () {
    $brands =Brand::withCount('vendor_products')->get();
    return view('front.brand-list',compact('brands'));
});
Route::get('/brand-single/{brand}', function ($id) {
    $brand =Brand::where('id',$id)->withCount('vendor_products')->first();
    $vendorproducts=$brand->vendor_products;
    return view('front.brand-single',compact('vendorproducts','brand'));
})->name('brand.single');
Route::get('/brand-single', function () {
    return view('front.brand-single');
});
Route::get('/change-password', function () {
    return view('front.change-password');
});
Route::get('/checkout', function () {
    return view('front.checkout');
});
Route::get('/coming-soon', function () {
    return view('front.coming-soon');
});
Route::get('/compare', function () {
    return view('front.compare');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/email-template', function () {
    return view('front.email-template');
});
Route::get('/error', function () {
    return view('front.error');
});
Route::get('/home-category', function () {
    return view('front.home-category');
});
Route::get('/home-classic', function () {
    return view('front.home-classic');
});
Route::get('/home-grid', function () {
    return view('front.home-grid');
});
Route::get('/home-standard', function () {
    return view('front.home-standard');
});
Route::get('/invoice', function () {
    return view('front.invoice');
});
Route::get('/offer', function () {
    return view('front.offer');
});
Route::get('/orderlist', function () {
    return view('front.orderlist');
});
Route::get('/privacy', function () {
    return view('front.privacy');
});
Route::get('/product-grid', function () {
    return view('front.product-grid');
});
Route::get('/product-simple', function () {
    return view('front.product-simple');
});
Route::get('/product-single', function () {
    return view('front.product-single');
});
Route::get('/product-tab', function () {
    return view('front.product-tab');
});
Route::get('/product-video', function () {
    return view('front.product-video');
});
Route::get('/reset-password', function () {
    return view('front.reset-password');
});
Route::get('/shop-1column', function () {
    return view('front.shop-1column');
});
Route::get('/shop-2column', function () {
    return view('front.shop-2column');
});
Route::get('/shop-3column', function () {
    return view('front.shop-3column');
});
Route::get('/shop-4column', function () {
    return view('front.shop-4column');
});
Route::get('/shop-5column', function () {
    return view('front.shop-5column');
});
Route::get('/wallet', function () {
    return view('front.wallet');
});
Route::get('/wishlist', function () {
    return view('front.wishlist');
});




