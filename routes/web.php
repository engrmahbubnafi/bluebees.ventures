<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomepageController;
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

Route::get('/', [HomepageController::class, 'homepage'])
    ->name('homepage');
Route::get('about-us', [HomepageController::class, 'aboutUs'])
    ->name('about_us');
Route::get('bluebees-xyz', [HomepageController::class, 'bluebeesxyz'])
    ->name('bluebees_xyz');
Route::get('knittersland', [HomepageController::class, 'knittersland'])
    ->name('knittersland');
Route::get('bluebees-ai', [HomepageController::class, 'bluebeesai'])
    ->name('bluebees_ai');
Route::get('trux24', [HomepageController::class, 'trux24'])
    ->name('trux24');
Route::get('xirooms', [HomepageController::class, 'xirooms'])
    ->name('xirooms');
Route::get('nilam-xyz', [HomepageController::class, 'nilamxyz'])
    ->name('nilam_xyz');
Route::get('bluebees4u', [HomepageController::class, 'bluebees4u'])
    ->name('bluebees4u');
Route::get('nilam360', [HomepageController::class, 'nilam360'])
    ->name('nilam360');
Route::get('blogs', [HomepageController::class, 'blog'])
    ->name('blog');
Route::get('contact', [HomepageController::class, 'contact'])
    ->name('contact');
Route::get('knittersland-met-bgmea', [BlogController::class, 'knitterslandMetBgmea'])
    ->name('blog_details.knittersland_met_bgmea');
Route::get('discover-difference-with-nilamxyz', [BlogController::class, 'discoverDifferenceWithNilamXyz'])
    ->name('blog_details.discover_difference_with_nilam_xyz');
Route::get('travel-kotha-introduces-xirooms', [BlogController::class, 'travelKothaIntroducesXirooms'])
    ->name('blog_details.travel_kotha_introduces_xirooms');