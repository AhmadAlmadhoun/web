<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Jorenvh\Share\Share;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class SiteController extends Controller
{
    public function index()
    {
        $post=Post::all();
        $shareComponent = \Share::page(
            'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();
        return view('site.index',compact('post','shareComponent'));
    }
    // public function ShareWidget()
    // {
    //     $shareComponent = \Share::page(
    //         'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
    //         'Your share text comes here',
    //     )
    //     ->facebook()
    //     ->twitter()
    //     ->linkedin()
    //     ->telegram()
    //     ->whatsapp()
    //     ->reddit();

    //     return view('posts', compact('shareComponent'));
    // }
    public function p($id)
    {
        // $posts=Post::all();

        $post = Post::where('id', '=',$id)->get();
        return view('site.post',compact('post'));
    }

}
