<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\SchoolProfile;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()
        ->where('active', '=', 1)
        ->whereDate('published_At', '<=', date('Y-m-d'))
        ->orderBy('published_at', 'desc')
        ->paginate();

        return view('home', compact('posts'));
    }

    public function visiMisi()
    {
        $profiles = SchoolProfile::query()
            ->first();

        return view('visi-misi', compact('profiles')); // Return the Visi Misi view
    }

    public function articleapp($slug)
    {

        $post = Post::query()
            ->where('active', '=', 1)
            ->whereDate('published_At', '<=', date('Y-m-d'))
            ->orderBy('published_at', 'desc')
            ->where('slug', $slug)
            ->firstOrFail();



        return view('article', compact('post'));
    }

    public function article()
    {

        $posts = Post::query()
            ->where('active', '=', 1)
            ->whereDate('published_At', '<=', date('Y-m-d'))
            ->orderBy('published_at', 'desc')
            ->paginate();

        return view('article_gallery', compact('posts'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
