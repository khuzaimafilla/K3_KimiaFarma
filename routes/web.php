<?php

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

Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/information', function () {
    return view('pages.information');
})->name('Information');

Route::get('/procedure', function () {
    return view('pages.procedure');
})->name('Procedure');

Route::get('/apd', function () {
    return view('pages.apd');
})->name('Apd');

Route::get('/smk3', function () {
    return view('pages.smk3');
})->name('Smk3');

Route::get('/risk-manage', function () {
    return view('pages.risk_manage');
})->name('RiskManage');

Route::get('/audit', function () {
    return view('pages.audit');
})->name('Audit');