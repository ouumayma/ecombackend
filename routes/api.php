<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ScategorieController;


Route::middleware('api')->group(function () {
    // Category Routes
    Route::get('categories', [CategorieController::class, 'index']); // List categories
    Route::post('categories', [CategorieController::class, 'store']); // Create category
    Route::get('categories/{id}', [CategorieController::class, 'show']); // Show category
    Route::put('categories/{id}', [CategorieController::class, 'update']); // Update category
    Route::delete('categories/{id}', [CategorieController::class, 'destroy']); // Delete category

    // Subcategory (Scategorie) Routes
    Route::get('scategories', [ScategorieController::class, 'index']); // List subcategories
    Route::post('scategories', [ScategorieController::class, 'store']); // Create subcategory
    Route::get('scategories/{id}', [ScategorieController::class, 'show']); // Show subcategory
    Route::put('scategories/{id}', [ScategorieController::class, 'update']); // Update subcategory
    Route::delete('scategories/{id}', [ScategorieController::class, 'destroy']); // Delete subcategory
    
    Route::get('/scat/{idcat}', [ScategorieController::class,'showSCategorieByCAT']);

    Route::get('/listarticles/{idscat}', [ArticleController::class,'showArticlesBySCAT']);

    Route::get('/articles/art/articlespaginate', [ArticleController::class,
'articlesPaginate']);

    Route::middleware('api')->group(function () {
        Route::resource('articles', ArticleController::class);
        });
});

