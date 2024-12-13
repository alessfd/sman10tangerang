<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\SchoolFacility;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::query()
        ->where('active', '=', 1)
        ->whereDate('published_at', '<=', date('Y-m-d'))
        ->orderBy('published_at', 'desc')
        ->paginate();

        $facilities = SchoolFacility::take(2)->get();

        return view('Home', compact('posts', 'facilities'));
    }

}
