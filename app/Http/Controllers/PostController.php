<?php

namespace App\Http\Controllers;

use App\Models\Post;
use function Ramsey\Uuid\v1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('admin.Post.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titel' =>'required',
            'desc' =>'required',
            'image' =>'required',
        ]);

        $new_image = rand().rand().time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('adminasset/img/post/'),$new_image);

        Post::create([
            'titel'=>$request->titel,
            'desc'=>$request->desc,
            'image'=>$new_image,
        ]);
        return redirect()->route('admin.Post.index')->with('msg', 'Post Created')->with('type', 'success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.Post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titel' =>'required',
            'desc' =>'required',
            'image' =>'required',
        ]);

        $post = Post::findOrFail($id);
        $new_image = $post->image;
        if($request->hasFile('image')) {
            // upload the file
            $new_image = rand().rand().time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('adminasset/img/post/'), $new_image);
        }

        // Save data to database
        $post->update([
            'titel' => $request->titel,
            'desc' => $request->desc,
            'image' => $new_image,
        ]);

        return redirect()->route('admin.Post.index')->with('msg', 'Post Updated')->with('type', 'info');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if(file_exists(public_path('adminasset/img/post/'.$post->image))) {
            File::delete(public_path('adminasset/img/post/'.$post->image));
        }


        $post->delete();

        return redirect()->route('admin.Post.index')->with('msg', 'Post Deleted')->with('type', 'danger');    }
}
