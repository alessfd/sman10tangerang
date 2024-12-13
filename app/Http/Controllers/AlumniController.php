<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\AlumniYear;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function alumni()
    {
        $years = AlumniYear::query()
            ->orderBy('year', 'desc')
            ->paginate();

        return view('Alumni_gallery', compact('years'));
    }

    //alumni app


    public function alumniapp($year)
    {
        $alumni = Alumni::query()
            ->whereHas('alumni_years', function ($query) use ($year) {
                $query->where('year', $year);
            })
            ->orderBy('id', 'asc')
            ->paginate(20);
            return view('Alumni', compact('alumni', 'year'));
    }
}
