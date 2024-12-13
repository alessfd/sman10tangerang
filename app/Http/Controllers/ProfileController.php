<?php

namespace App\Http\Controllers;

use App\Models\LectureProfile;
use App\Models\SchoolFacility;
use App\Models\SchoolProfile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function visiMisi()
    {
        $profiles = SchoolProfile::query()
        ->first();

        return view('visi-misi', compact('profiles')); // Return the Visi Misi view
    }


    public function contact()
    {
        // Return the 'contact' view
        return view('contact');  // Assumes there's a contact.blade.php in resources/views
    }

    public function Profile()
    {
        $headmaster = LectureProfile::where('jabatan', 'Kepala Sekolah')->first();

        $teachers = LectureProfile::where('jabatan', '!=', 'Kepala Sekolah')->get(); // Fetch teachers data
        return view('Profile', compact('headmaster', 'teachers'));
    }

    public function showFacilities()
    {
        $facilities = SchoolFacility::all();

        // Mengirim data fasilitas ke view
        return view('facilities', compact('facilities'));
    }
}
