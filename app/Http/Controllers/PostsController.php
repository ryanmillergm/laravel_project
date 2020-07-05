<?php

namespace App\Http\Controllers;

class PostsController

{
  public function show($slug)
  {

    $post = \DB::table('posts')->where('slug', $slug)->first();

    // dd($post);
    // $posts = [
    //     'my-first-post' => 'Hello, this is my first blog post!',
    //     'my-second-post' => 'Now I am getting the hang of this blogging thing.'
    // ];

    // if (! array_key_exists($post, $posts)) {
    //     abort(404, 'Sorry, that post was not found.');
    // }

    return view('post', [
        'post' => $post
    ]);
  }
}
