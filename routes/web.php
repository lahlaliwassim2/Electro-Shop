<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
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

Route::get('/', [StaticController::class, 'index'] );


// Route::get('/store', function () {
//     $filter = request('style');
//     if(isset($filter)){
//         return 'wach '.$filter.'</p>';

//     }
//     return 'wach abnadam  ';

// });

Route::get('/store/{categorie?}/{item?}',function($categorie = null,$item = null){
    if(isset($categorie)){

        if(isset($item)){
            return '<h1>'.$categorie.' '.$item.'</h1>';
        }
        return "<h1>{$categorie}</h1>";
    }
    return '<h1>nom prenom </h1>';
});
