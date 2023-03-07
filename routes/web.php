<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::group([
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Admin',
], function () {

    Route::group([
        'prefix' => '/',
        'namespace' => 'Main',
    ], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });

    Route::group([
        'prefix' => 'languages',
        'namespace' => 'Language',
    ], function () {
        Route::get('/', 'IndexController')->name('admin.language.index');
        Route::get('/create', 'CreateController')->name('admin.language.create');
        Route::post('/', 'StoreController')->name('admin.language.store');
        Route::get('/show/{language}', 'ShowController')->name('admin.language.show');
        Route::get('/{language}/edit', 'EditController')->name('admin.language.edit');
        Route::patch('/{language}', 'UpdateController')->name('admin.language.update');
        Route::delete('/{language}', 'DestroyController')->name('admin.language.destroy');
    });

    Route::group([
        'prefix' => 'skills',
        'namespace' => 'Skill',
    ], function () {
        Route::get('/', 'IndexController')->name('admin.skill.index');
        Route::get('/create', 'CreateController')->name('admin.skill.create');
        Route::post('/', 'StoreController')->name('admin.skill.store');
        Route::get('/show/{skill}', 'ShowController')->name('admin.skill.show');
        Route::get('/{skill}/edit', 'EditController')->name('admin.skill.edit');
        Route::patch('/{skill}', 'UpdateController')->name('admin.skill.update');
        Route::delete('/{skill}', 'DestroyController')->name('admin.skill.destroy');
    });

    Route::group([
        'prefix' => 'projects',
        'namespace' => 'Project',
    ], function () {
        Route::get('/', 'IndexController')->name('admin.project.index');
        Route::get('/create', 'CreateController')->name('admin.project.create');
        Route::post('/', 'StoreController')->name('admin.project.store');
        Route::get('/show/{project}', 'ShowController')->name('admin.project.show');
        Route::get('/{project}/edit', 'EditController')->name('admin.project.edit');
        Route::patch('/{project}', 'UpdateController')->name('admin.project.update');
        Route::delete('/{project}', 'DestroyController')->name('admin.project.destroy');
    });

    Route::group([
        'prefix' => 'vacancies',
        'namespace' => 'Vacancy',
    ], function () {
        Route::get('/', 'IndexController')->name('admin.vacancy.index');
        Route::get('/create', 'CreateController')->name('admin.vacancy.create');
        Route::post('/', 'StoreController')->name('admin.vacancy.store');
        Route::get('/show/{vacancy}', 'ShowController')->name('admin.vacancy.show');
        Route::get('/{vacancy}/edit', 'EditController')->name('admin.vacancy.edit');
        Route::patch('/{vacancy}', 'UpdateController')->name('admin.vacancy.update');
        Route::delete('/{vacancy}', 'DestroyController')->name('admin.vacancy.destroy');
    });

});
