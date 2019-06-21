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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test','Test\TestController@test');
Route::get('/curl1','Test\TestController@curl1');
Route::get('/accessToken','Test\TestController@accessToken');
Route::get('/cuPost','Test\TestController@cuPost');
Route::post('/register','Test\TestController@register');
Route::get('/menu','Test\TestController@menu');
Route::get('/encryption','Test\TestController@encryption');  //加密
Route::get('/rsa','Test\TestController@rsa');  //非对称加密
Route::get('/st','Test\TestController@st');  //签名
Route::get('/pay','Test\TestController@pay');  //签名
Route::get('/test1','Test\TestController@test1');  //测试模板布局
Route::get('/test2','Test\TestController@test2');  //测试模板布局



Route::get('/index','Index\IndexController@index');  //项目首页
Route::get('/login','Login\LoginController@login');  //登录页面
Route::get('/register','Login\LoginController@register');  //注册页面
Route::get('/cart','Cart\CartController@cart');  //购物车页面
Route::get('/checkout','Checkout\CheckoutController@checkout');  //结账页面
Route::get('/blog','Blog\BlogController@blog');  //结账页面
Route::get('/blogSingle','Blog\BlogController@blogSingle');  //结账页面
Route::get('/productList','Product\ProductController@productList');  //产品页面
Route::get('/shopSingle','Shop\ShopController@shopSingle');  //商品页面
Route::get('/wishlist','Wishlist\WishlistController@wishlist');  //订单页面
Route::get('/testimonial','Testimonial\TestimonialController@testimonial');  //证明页面
Route::get('/aboutUs','AboutUs\AboutUsController@aboutUs');  //证明页面
Route::get('/contact','Contact\ContactController@contact');  //联系页面
Route::get('/setting','Setting\SettingController@setting');  //设置页面


