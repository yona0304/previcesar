<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/administrador', function () {

    return view('administrator');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



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
