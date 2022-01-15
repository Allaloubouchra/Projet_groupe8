<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostMedia;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts= Post::latest()->get();
        return view('blogs', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
       return view('post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(StorePostRequest $request)
    { $validated = $request->validate([
        'title' => 'required|string|unique:posts|min:1|max:30',
        'content' => 'required|string|min:1|max:2000',
        'post_media'=>'required'
    ]); 
      $post=new Post();
      $post->title =$request['title'];
      $post->content=$request['content'];
      //$post->user_id=$request->user->id;
      $post->user_id=1;
      $post->isVisible=true;
      $post->isValide=true;
      $post->save();

      $disk=Storage::disk("public");
      $files=$request->file('post_media');
      foreach($files as $file){
        $hashName=$file->hashName();
        $disk->put('', $file);
        $url =Storage::url($hashName);
        $post_media= new PostMedia();
        $post_media->post_id=$post->id;
        $post_media->mediaPath=$url;
        $post_media->save();
      }
      return redirect('/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $id)
    {
       $post=Post::find($id);
       return view('post_details', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $validated = $request->validate([
        'title' => 'required|string|unique:posts|min:5|max:100',
        'content' => 'required|string|min:5|max:2000',
        'user_id' => 'required|integer'
    ]);
         $post->update($validated);
        return redirect(route('post','Post updated!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
         return redirect(route('posts.index'))->with('notification', '"' . $post->title .  '" deleted!');
    }
}
