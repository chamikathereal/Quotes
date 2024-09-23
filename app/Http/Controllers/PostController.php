<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required | image' //SET IMAGE TYPE (mimes:jpeg,png,jpg,gif,svg|max:2048)
        ]);

        if ($validator->fails()) {
            return back()->with('status',"Somthing went wrong");
        } else {
            $imageName = time() . '.' . $request->thumbnail->extension();  //createnewname.png
            
            $request->thumbnail->move(public_path('thumbnails'), $imageName); //Move image to the folder called thumnail in bpublic directory with the new name.
            
            Post::create([
                'user_id' => auth()->user()->id,
                'title' => $request->title,
                'description' => $request->description,
                'thumbnail' => $imageName
            ]);
        }

        return redirect(route('posts.all'))->with('status', 'Post Create Successfully');
    }

    public function show($postId)
    {

        $post = Post::findOrFail($postId);

        return view('posts.show', compact('post'));
    }


    public function edit($postId)
    {
        $post = Post::findOrFail($postId);
        return view('posts.edit', compact('post'));
    }

    public function update($postId, Request $request)
    {
        //dd($request->all()); - ***Using this we can see the array of data in the console.***
        Post::findOrFail($postId)->update($request->all());

        return redirect(route('posts.all'))->with('status', 'Post Update Successfully');
    }

    public function delete($postId)
    {
        Post::findOrFail($postId)->delete();
        return redirect(route('posts.all'));
    }
}
