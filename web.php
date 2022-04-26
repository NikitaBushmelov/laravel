<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LlibreController;
use App\Http\Controllers\UsuariController;
use App\Http\Controllers\PrestecController;
use App\Models\Llibre;
use App\Models\usuari;
use App\Models\prestec;

Route::get('/', function () {
    return view('layouts.nav');
});
Route::group(['prefix' => '/llibre'], function()//grup de rutes
{  
    Route::get('/mostrar',[LlibreController::class,'index']);
    //quan entres a llibre mostrar crida l'apartat de index del controlador Llibre
    Route::get('/actualitzar',[LlibreController::class,'update']);
    Route::post('/insertar',[LlibreController::class,'store']); 
    Route::get('/afegir',function(){  
        return view('llibre.form'); 
    }); 
    Route::delete('/llibre.destroy/{isbn}',[LlibreController::class,'destroy'])->name('llibre.destroy');
    Route::get('/llibre.edit/{isbn}',[LlibreController::class,'edit'])->name('llibre.edit');
    Route::post('llibre.update/{isbn}',[LlibreController::class,'update'])->name('llibre.update');
});  
Route::group(['prefix' => '/usuari'], function()  
{  
    Route::get('/mostrar',[UsuariController::class,'index']);
    Route::get('/actualitzar',[UsuariController::class,'update']);
    Route::post('/insertar',[UsuariController::class,'store']); 
    Route::get('/afegir',function(){  
        return view('usuari.form'); 
    }); 
    Route::delete('/usuari.destroy/{isbn}',[UsuariController::class,'destroy'])->name('usuari.destroy');
    Route::get('/usuari.edit/{isbn}',[UsuariController::class,'edit'])->name('usuari.edit');
    Route::post('usuari.update/{isbn}',[UsuariController::class,'update'])->name('usuari.update');
});  
Route::group(['prefix' => '/prestec'], function()  
{  
    Route::get('/mostrar',[LlibreController::class,'index']);
    Route::get('/actualitzar',[LlibreController::class,'update']);
    Route::post('/insertar',[LlibreController::class,'store']); 
    Route::get('/afegir',function(){  
        return view('llibre.form'); 
    }); 
    Route::delete('/llibre.destroy/{isbn}',[LlibreController::class,'destroy'])->name('llibre.destroy');
    Route::get('/llibre.edit/{isbn}',[LlibreController::class,'edit'])->name('llibre.edit');
    Route::post('llibre.update/{isbn}',[LlibreController::class,'update'])->name('llibre.update');
});  