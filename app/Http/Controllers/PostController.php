<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\AlumniYear;
use App\Models\Post;
use App\Models\Category;
use App\Models\SchoolProfile;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\SchoolFacility;
use App\Models\LectureProfile;

class PostController extends Controller
{



    public function articleapp(string $date,string $slug)
    {
        $formattedDate = date('Y-m-d', strtotime($date));
        $post = Post::query()
            ->where('active', '=', 1)
            ->whereDate('published_at', '<=', date('Y-m-d'))
            ->where('slug', $slug)
            ->whereDate('published_at', $formattedDate)
            ->firstOrFail();


        $otherArticles = Post::query()
            ->where('active', '=', 1)
            ->whereDate('published_at', '<=', date('Y-m-d'))
            ->where('slug', '!=', $slug) // Exclude the current article
            ->orderBy('published_at', 'desc') // Order by published_at
            ->limit(5) // Limit to 5 articles
            ->get();

        return view('Article', compact('post', 'otherArticles'));
    }


    public function article(Request $request)
    {
        $categories = Category::all();

        $query = Post::query()
            ->where('active', '=', 1)
            ->whereDate('published_at', '<=', now());

        // Filter by categories
        if ($request->has('categories') && is_array($request->categories)) {
            $query->whereHas('categories', function ($q) use ($request) {
                $q->whereIn('categories.id', $request->categories);
            });
        }

        // Search by title
        if ($request->has('search') && $request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $posts = $query->orderBy('published_at', 'desc')->paginate(12);

        return view('Article_gallery', compact('categories', 'posts'));
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
