<?php

use App\Http\Controllers\SiteConroller;
use Illuminate\Support\Facades\Route;    

Route::get('/', [SiteConroller::class, 'home']);
Route::get('/sobre-nos', [SiteConroller::class, 'sobrenos']);
Route::get('/contato', [SiteConroller::class, 'contato']);
