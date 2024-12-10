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
                'name' => 'Herawati',
                'gender' => 'F',
                'jabatan' => 'Kepala Sekolah',
                'photo' => 'teacher_photos/.Herawati.jpg',
            ],
            [
                'name' => 'Abdul Syukur',
                'gender' => 'M',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Abdul-Syukur.jpg',
            ],
            [
                'name' => 'Ari Rahmawati',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Ari-Rahmawati.jpg',
            ],
            [
                'name' => 'Dahlan',
                'gender' => 'M',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Dahlan.jpg',
            ],
            [
                'name' => 'Dedek Martha Dewi',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Dedek-Martha.jpg',
            ],
            [
                'name' => 'Fahmidi Fadilah',
                'gender' => 'M',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Fahmidi-Fadilah.jpg',
            ],
            [
                'name' => 'Gempar Triono',
                'gender' => 'M',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Gempar-Triono.jpg',
            ],
            [
                'name' => 'Hidayah',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Hidayah.jpg',
            ],
            [
                'name' => 'Ida Muliasih',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Ida-Muliasih.jpg',
            ],
            [
                'name' => 'Indah Aprilistini',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Indah-Aprilistini.jpg',
            ],
            [
                'name' => 'Kholidah',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Kholidah.jpg',
            ],
            [
                'name' => 'Laila Mahromi',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Laila-Mahromi.jpg',
            ],
            [
                'name' => 'Lasmi Yuniasih',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Lasmi-Yuniasih.jpg',
            ],
            [
                'name' => 'Lisa Anawati',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Lisa-Anawati.jpg',
            ],
            [
                'name' => 'Mazafah',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Mazafah.jpg',
            ],
            [
                'name' => 'Sheryl Nisarahmah',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Sheryl-Nisarahmah.jpg',
            ],
            [
                'name' => 'Siti Atikah',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Siti-Atikah.jpg',
            ],
            [
                'name' => 'Siti Fathiyah',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Siti-Fathiyah.jpg',
            ],
            [
                'name' => 'Siti Junia Ulfah Lubis',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Siti-Junia-Ulfah-Lubis.jpg',
            ],
            [
                'name' => 'Suerna',
                'gender' => 'F',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Suerna.jpg',
            ],
            [
                'name' => 'Sunaryo',
                'gender' => 'M',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Sunaryo.jpg',
            ],
            [
                'name' => 'Tri Winoko',
                'gender' => 'M',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Tri-Winoko.jpg',
            ],
            [
                'name' => 'Wawan Lesmana',
                'gender' => 'M',
                'jabatan' => 'Guru',
                'photo' => 'teacher_photos/.Wawan-Lesmana.jpg',
            ],
            // Add more entries as needed
        ]);
    }
}

