<?php

use App\Http\Controllers\admin\MainController;
use App\Http\Controllers\admin\contentController;
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

Route::get('/', [\App\Http\Controllers\front\MainController::class, 'exps']);


Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [MainController::class, 'logout'])->name('auth.logout');


Route::group(['middleware' => ['AuthCheck']], function () {

    Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
    Route::get('/admin/register', [MainController::class, 'register'])->name('admin.register');
    Route::get('/admin/administrators', [MainController::class, 'administrators']);
    Route::get('/admin/deleteadministrator/{id}', [MainController::class, 'deleteadministrator']);
    Route::get('/admin/experiance', [contentController::class, 'experiancelist']);
    Route::get('/admin/deleteexp/{id}', [contentController::class, 'deleteexp']);
    Route::get('/admin/createexppage', [contentController::class, 'createexppage'])->name('admin.createexppage');
    Route::post('/admin/saveexp', [contentController::class, 'saveexp'])->name('admin.saveexp');

//    Route::get('/admin/test', function () {
//        $table = DB::select('DESCRIBE profile');
////        dd($table);
//
//        $people = array(
//
//            array("name" => "Jennifer Kimbers",
//                "email" => "abc@gmail.com",
//                "city" => "Seattle",
//                "state" => "Washington"),
//
//            array("name" => "Rodney Hutchers",
//                "email" => "def@gmail.com",
//                "city" => "Los Angeles",
//                "state" => "California"),
//
//            array("name" => "Robert Smith",
//                "email" =>  "ghi@gmail.com",
//                "city" => "Michigan",
//                "state" => "Missouri")
//        );
//
//
//        foreach ($table as $item){
//            $colums = $item->Field;
//            echo $colums;
//        }
////        echo '<pre>';
////        var_dump($table[0]->Field);
////        echo '<pre>';
//    });


    Route::get('/admin/dashboard', [MainController::class, 'dashboard']);
});
