<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\UserController;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/administrador', function () {

    return view('administrator');
});

// Route::get('/administrador', [UserController::class, 'index']);
Route::get('/administrador', [UserController::class, 'index'])->name('administrator');
Route::post('/trabajadores', [UserController::class, 'store'])->name('trabajadores.store');

//parte de crear el nuevo contrato.
// Route::get('/administrador', [ContractController::class, 'create'])->name('administrator');
Route::post('/contracts', [ContractController::class, 'store'])->name('contracts.store');
// Route::get('/administrador', [ContractController::class, 'create'])->name('administrator');


// Route::get('prueba', function(){
    
    
        // $post = new Post;

        // $post->title = 'TiTuLo De PrUeBa 1';
        // $post->content = 'Contenido de prueba 1';
        // $post->categoria = 'Categoria de prueba 1';

        // $post->save();

        // return $post;
    
    
    // $post = Post::find(1);

    /*
        Actualizar registros
        $post = Post::where('title', 'Titulo de pruba 1')
                    ->first();
        
        $post->categoria = 'Desarrollo web';
        $post->save();

    */
    /*
        listar todos los posts
        $posts = Post::orderBy('categoria', 'asc')
                ->select('id', 'title', 'categoria')
                ->take(2)
                -get();

    */

    // $post = Post::find(1);
    // $post->delete();

    // return 'Eliminado correctamente';
// });
