<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\AlumniYear;
use App\Models\post;
use App\Models\SchoolProfile;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
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

    public function alumni()
    {
        $years = AlumniYear::query()
            ->orderBy('year', 'desc')
            ->paginate();

        return view('alumni_gallery', compact('years'));
    }

    public function alumniapp($year)
    {
        $alumni = Alumni::query()
            ->whereHas('alumni_years', function ($query) use ($year) {
                $query->where('year', $year);
            })
            ->orderBy('id', 'asc')
            ->paginate(20);
        return view('alumni', compact('alumni', 'year'));
    }
    // select * from `alumni_years` where `alumni_years`.`id` in (15067633, 438190617, 670416382, 957630562, 1710267075, 3129621783, 3299072320, 3444747313, 4233683750, 4290800802, 4324629166, 4328649606, 4844513746, 5181285201, 5645894222) and `year` = '2001'
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
