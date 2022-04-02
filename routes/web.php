<?php

use App\Http\Controllers\MainController;
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
//     return view('page.home');
// });
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('profile', [MainController::class, 'profile'])->name('profile');

// Route::get('/x', function () {
//     $str = ['P','A','P','A'];
//     $res = "";
//     foreach ($str as $key => $value) {
//         $res .= $value;
//     }
//     $rev = strrev($res);
//     if($rev == $res){
//         echo "Same";
//         return;
//     }
//     echo "Not Same";

// });

// Route::get('/xx', function () {
//     $str = "ABC";
//     $str2 = "BCD";
//     $res = str_split($str);
//     $res2 = str_split($str2);
//     sort($res);
//     sort($res2);
//     if($res == $res2){
//         echo "Anagram";
//         return;
//     }
//     echo "Not Anagram";

// });


