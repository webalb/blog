    <?php

use App\Models\Post;
use App\Models\Category;
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

Route::get('/', function () {

        return view('posts',
         ['posts' => Post::latest()->with('category')->get()
       ]);

    });

/*
 / Posts/post -MEANS- get it exactly
 / Posts/{post} -MEANS- search for post from the string given
 /
 */
Route::get('categories/{category:slug}', function (Category $category) {

    return view('posts', [
        'posts' => $category->posts
    ]);

});
Route::get('posts/{post}', function (Post $post) {

    return view('post', [
        'post' => $post
    ]);

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class , 'index'])->name('home');
