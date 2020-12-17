<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controller\Carboncontroller;


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


Route::get('/carbontaxi', function(){

return view ('carbontaxi');


});



Route::get('/carbondiesel', function(){

    return view ('carbondiesel');


    });

    Route::get('/carbonpetrol', function(){

        return view ('carbonpetrol');


        });

        Route::get('/carbonbusiness', function(){

            return view ('carbonbusiness');


            });

            Route::get('/carbonmotor', function(){

                return view ('carbonmotor');


                });

                Route::get('/carbonbus', function(){

                    return view ('carbonbus');


                    });

