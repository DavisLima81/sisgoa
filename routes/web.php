<?php

use Illuminate\Support\Facades\Route;

/* Adicionado para controle de acesso ACL */
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PopController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\StorageAttributes;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('pops', PopController::class);
    /* Route::resource('pilotos', PilotoController::class); */
});

//Rota de fallback, tratamento de erro 404
Route::fallback(function () {
    //Caso a rota digitada no navegador não seja econtrada, redirecionar para /home:
    if (Auth::check())
    {   
        return back();

    } else
    {
    return view('auth.login');

    }
});

//Rota para tratamento de arquivos (dowload/upload)
Route::get('/files', function()
{
    $files = Storage::files('');
    $allFiles = Storage::allFiles('');

    /* CRIAR DIRETÓRIO */
    //Storage::makeDirectory('pops');

    /* DELETAR DIRETÓRIO */
    //Storage::deleteDirectory('pops');

    $directories = Storage::directories('');
    $allDirectories = Storage::allDirectories('');

    var_dump($files, $allFiles, $directories, $allDirectories);
});