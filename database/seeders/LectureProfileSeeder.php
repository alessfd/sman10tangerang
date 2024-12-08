<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\LectureProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class LectureProfileSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('lecture_profiles')->insert( [
            [
                'name' => 'Abdul Syukur',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Abdul-Syukur.png',
            ],
            [
                'name' => 'Ari Rahmawati',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Ari-Rahmawati.png',
            ],
            [
                'name' => 'Dahlan',
                'gender' => 'M',
                'photo' => 'teacher_photos/.Dahlan.png',
            ],
            [
                'name' => 'Dedek Martha Dewi',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Dedek-Martha.png',
            ],
            [
                'name' => 'Fahmidi Fadilah',
                'gender' => 'M',
                'photo' => 'teacher_photos/.Fahmidi-Fadilah.png',
            ],
            [
                'name' => 'Gempar Triono',
                'gender' => 'M',
                'photo' => 'teacher_photos/.Gempar-Triono.png',
            ],
            [
                'name' => 'Hidayah',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Hidayah.png',
            ],
            [
                'name' => 'Ida Muliasih',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Ida-Muliasih.png',
            ],
            [
                'name' => 'Indah Aprilistini',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Indah-Aprilistini.png',
            ],
            [
                'name' => 'Kholidah',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Kholidah.png',
            ],
            [
                'name' => 'Laila Mahromi',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Laila-Mahromi.png',
            ],
            [
                'name' => 'Lasmi Yuniasih',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Lasmi-Yuniasih.png',
            ],
            [
                'name' => 'Lisa Anawati',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Lisa-Anawati.png',
            ],
            [
                'name' => 'Mazafah',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Mazafah.png',
            ],
            [
                'name' => 'Sheryl Nisarahmah',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Sheryl-Nisarahmah.png',
            ],
            [
                'name' => 'Siti Atikah',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Siti-Atikah.png',
            ],
            [
                'name' => 'Siti Fathiyah',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Siti-Fathiyah.png',
            ],
            [
                'name' => 'Siti Junia Ulfah Lubis',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Siti-Junia-Ulfah-Lubis.png',
            ],
            [
                'name' => 'Suerna',
                'gender' => 'F',
                'photo' => 'teacher_photos/.Suerna.png',
            ],
            [
                'name' => 'Sunaryo',
                'gender' => 'M',
                'photo' => 'teacher_photos/.Sunaryo.png',
            ],
            [
                'name' => 'Tri Winoko',
                'gender' => 'M',
                'photo' => 'teacher_photos/.Tri-Winoko.png',
            ],
            [
                'name' => 'Wawan Lesmana',
                'gender' => 'M',
                'photo' => 'teacher_photos/.Wawan-Lesmana.png',
            ],
            // Add more entries as needed
        ]);
    }
}

