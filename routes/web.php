<?php
namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Photo;
use App\Models\Country;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;

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

// //Route::get('/test', [PostController::class, 'test']);

 Route::get('/', function () {
    return view('welcome');
 });

// Route::get('/about', function () {
//    return "This should be my about page";
// });

// Route::get( '/contact', function () {
//    return "This should be my contact numbers";
// });

// Route::get('/profile', function () {
//    return "This should be my profile";
// });

// Route::get('/post/{id}/{name}/{name2}', function($id, $name, $name2){

//    return "This is Post number ". $id . " ". $name. " ". $name2;

// });


// Route::get('admin/posts/example', array('as'=>'admin.home'  ,function(){

//    $url=route('admin.home');

//    return "This url is ". $url;

// }));

use App\Http\Controllers\PostsController;

//Route::get('/post/{id}', [PostsController::class, 'index']);





Route::get('/contact', [PostsController::class, 'contact']);

Route::get('post/{id}/{name}/{password}', [PostsController::class, 'show_post']);

use App\Http\Controllers\TestController;
Route::get('/tests', [TestController::class, 'Q6']);

Route::get('/tests1', [TestController::class, 'weightCase']);

Route::get('/q3', [TestController::class, 'Q3']);

Route::group(['middleware' => ['web']], function (){

});

// Route::get('/insert', function() {

//    DB::insert('insert into posts(title, content) values(?, ?)', ['Laravel is awesome with Edwin', 'Laravel is the best thing that has happened to PHP, PERIOD']); 

// });

//DB Raw SQL Queries

// Route::get('/read', function() {

//    $results = DB::select('select * from posts where id = ?', [1]);

//    return var_dump($results);
//    // foreach($results as $post){
//    //    return $post->content;
//    // }

// });

// Route::get('update', function(){

//    $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);

//    return $updated;
// });





//ELOQUENT ORM

// Route::get('/read', function(){

//    $posts = Post::all();

//    foreach($posts as $post){

//       return $post->content;
//    }

// });


// Route::get('/find', function(){

//    $post = Post::find(2);
//    return $post->title;
//    // foreach($posts as $post){

//    //    return $post->content;
//    // }

// });


// Route::get('/findwhere', function(){

//    $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//    return $posts;


// });


// Route::get('/findmore', function(){

//    // $posts = Post::findOrFail(1);

//    // return $posts;
//       $posts = Post::where('users_count', '<', 50)->firstOrFail();



// });


   Route::get('/basicinsert', function(){

      $post = new Post;
      //$post->user_id = '1';
      $post->title = '12New ORM title insert1';
      $post->content = '12Wow ORM isreally cool, look at this content1';

      $post->save();

   });

   Route::get('/basicinsert2', function(){

      $post = Post::find(2);
      $post->title = 'New ORM title insert 2';
      $post->content = 'Wow ORM isreally cool, look at this content 2';

      $post->save();

   });


         Route::get('/create', function(){

         Post::create(['title'=>'the create method', 'content'=>'WOW I\'am learning alot with PHP']);



      });


         // Route::get('/update', function(){

         //    Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'I LOVE my instructor']);

         // });

            // Route::get('/delete', function(){

            //    $post = Post::find(2);

            //    $post->delete();



            // });

      // Route::get('delete2', function(){

      //    Post::destroy([4,5]);
      // });
      

      Route::get('/softdelete', function(){

         Post::find(7)->delete();

         
      });


      Route::get('/readsoftdelete', function(){

         // $post = Post::find(1);
         // return $post;


         // $post = Post::withTrashed()->where('id', 1)->get();
         // return $post;

         $post = Post::onlyTrashed()->where('is_admin', 0)->get();
         return $post;
         
         
      });


      Route::get('/restore', function(){

         
         Post::withTrashed()->where('is_admin', 0)->restore();
         

      });

      Route::get('/forcedelete', function(){

         Post::onlyTrashed()->where('is_admin', 0)->forceDelete();


      });


      //Eloquent relationships

      // Route::get('/user/{id}/post', function($id){

      //    return User::find($id)->post;

      // });


      // Route::get('/post/{id}/user', function($id){

      //    return Post::find($id)->user->name;


      // });

      //One to Many

      // Route::get('posts', function(){

      //    $user = User::find(1);
      //    foreach($user->posts as $post){
      //       echo $post->title . "<br>";
      //    }


      // });

      //Many to Many Relationship

      // Route::get('user/{id}/role', function($id){

      //    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
      //    return $user;
      //    // foreach($user->roles as $role){
      //    //    return $role->name;
      //    // }
      // });

      //Accessing the Intermidiate table/ Pivot table

      // Route::get('user/pivot', function(){

      //    $user = User::find(1);

      //    foreach($user->roles as $role){
      //       return $role->pivot;
      //    }


      // });


      // Route::get('/user/country', function(){

      //       $country = Country::find(4);
      //       foreach($country->posts as $post){

      //          return $post->title;
      //       }
      // });


      //Polymorphic Relations
      // Route::get('user/photos', function(){

      //    $user = User::find(1);

      //    foreach($user->photos as $photo){
      //       return $photo->path;
      //    }
      // });

      // Route::get('post/{id}/photos', function($id){

      //    $post = Post::find($id);

      //    foreach($post->photos as $photo){
      //       echo $photo->path . "<br>";
      //    }
      // });
      

      // Route::get('photo/{id}/post', function($id){

      //    $photo = Photo::findOrFail($id);
      //       return $photo->imageable;

      // });


      // Polymorphic Many to Many

      // Route::get('/post/tag', function(){

      //    $post = Post::find(1);
      //    foreach($post->tags as $tag){

      //       echo $tag->name;

      //    }

      // });

      // Route::get('tag/post', function(){

      //    // $tag = Tag::find(2);
      //    // return $tag->posts;

      //    $tag = Tag::find(2);
      //    foreach($tag->posts as $post){
      //       echo $post->title;

      //    }

      // });

      ///CRUD Application
      Route::get('', function(){



      });

      Route::post('storepost', 'PostsController@store')->name('storepost.store');

      Route::group(['middleware'=>'web'], function(){

         Route::resource('posts', PostsController::class);
       


      Route::get('/dates', function(){

         $date = new \DateTime('+1 week');

         echo $date->format('m-d-Y');

         echo '<br>';

         echo Carbon::now()->addDays(10)->diffForHumans();

         echo '<br>';
         echo Carbon::now()->subMonths(5)->diffForHumans();

         echo '<br>';
         echo Carbon::now()->yesterday()->diffForHumans();

         echo '<br>';



      });

      Route::get('/getname', function(){
         $user = User::find(1);

         echo $user->name;


      });

      Route::get('/setname', function(){
         $user = User::find(1);

          $user->name = "william";
          $user->save();


      });




   });