    <?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [\App\Http\Controllers\PostController::class, 'show']);



    Route::get('authors/{author:username}', function (User $author) {


        return view('posts', [
           'posts' => $author->post
        ]);

    });
