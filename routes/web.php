<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IPAddressController;
use App\Http\Controllers\SchusterTemplate;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SendMailController;

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

//Basic Routing
/*
Route::get('/', function () {
    return view('home');
});

Route::get('/dex', function () {
    return view('home');
});
*/
//Basic Routing

Route::get('/', [SchusterTemplate::class, 'index']);
Route::get('/business_consulting_services', [SchusterTemplate::class, 'business_consulting_services']);
Route::get('/commercial_loan_services', [SchusterTemplate::class, 'commercial_loan_services']);
Route::get('/website_services', [SchusterTemplate::class, 'website_services']);
Route::get('/disclaimers', [SchusterTemplate::class, 'disclaimers']);
Route::get('/faq', [SchusterTemplate::class, 'faq']);
Route::get('/team', [SchusterTemplate::class, 'team']);
Route::get('/review', [SchusterTemplate::class, 'review']);
Route::get('/acceptable_use_policy', [SchusterTemplate::class, 'acceptable_use_policy']);
Route::get('/cookie_policies', [SchusterTemplate::class, 'cookie_policies']);
Route::get('/privacy_policy', [SchusterTemplate::class, 'privacy_policy']);
Route::get('/terms_and_conditions', [SchusterTemplate::class, 'terms_and_conditions']);

//using extends

Route::get('/glk', [SchusterTemplate::class, 'glk']);

Route::post('/', [SchusterTemplate::class, 'contactForm'])->name('processContact');

Route::resource('products', ProductController::class);

Route::get('/send-mail', [SendMailController::class, 'index']);

// visualize the form
Route::get('/files', [SchusterTemplate::class, 'files'])->name('files');

// handle the post request
Route::post('/files', [SchusterTemplate::class, 'filesUpload'])->name('files.store');

Route::get('/apihex', [SchusterTemplate::class, 'apihex']);


Route::get('/local-ip-address', [IPAddressController::class, 'getLocalIP']);

//I will need to find the method to check the exact header response code


//The fallback route should always be the last route registered by your application.
Route::fallback(function () {
    return view('404');
});