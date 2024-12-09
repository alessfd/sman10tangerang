<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\SchoolFacility;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('school_facilities')->insert( [
            [
                'name' => 'Lapangan Olahraga',
                'description' => 'Lapangan olahraga di SMAN 10 Tanggerang merupakan fasilitas yang dirancang untuk mendukung kegiatan fisik dan pengembangan karakter siswa. Dengan desain serbaguna, lapangan ini dapat digunakan untuk berbagai olahraga seperti sepak bola, bola basket, voli, dan aktivitas atletik lainnya. Lapangan ini tidak hanya menjadi tempat pembelajaran olahraga, tetapi juga wadah untuk kegiatan ekstrakurikuler, kompetisi antar sekolah, serta mendukung kesehatan dan kebugaran siswa. Kami percaya bahwa fasilitas ini dapat memberikan pengalaman belajar yang menyenangkan sekaligus membangun jiwa sportivitas dan kerja sama tim.',
                'images' => 'Facility_photos/Lapangan_Sekolah.jpg'
            ],
            [
                'name' => 'Labotarium Ipa',
                'description' => 'Laboratorium IPA SMAN 10 Tangerang menyediakan fasilitas lengkap untuk mendukung praktik sains di bidang fisika, kimia, dan biologi. Dengan peralatan modern seperti mikroskop, bahan kimia, alat ukur, dan model anatomi, siswa dapat mempraktikkan teori yang dipelajari di kelas. Didukung oleh guru yang berpengalaman, laboratorium ini menjadi tempat siswa mengasah kemampuan analisis, observasi, dan eksperimen untuk memahami konsep ilmiah secara langsung.',
                'images' => 'Facility_photos/Lab_Ipa.jpg'
            ],
            [
                'name' => 'Kelas',
                'description' => 'Kelas di SMAN 10 Tangerang dirancang untuk mendukung proses belajar-mengajar yang optimal. Suasana kelas yang nyaman dan kondusif memungkinkan siswa untuk fokus pada pembelajaran serta aktif berdiskusi dan berkolaborasi. Selain itu, kelas-kelas di SMAN 10 Tangerang juga menjadi tempat siswa mengembangkan keterampilan sosial dan membangun hubungan positif dengan guru serta teman sekelas.',
                'images' => 'Facility_photos/Kelas.jpg'
            ],
            [
                'name' => 'Perpustakaan',
                'description' => 'Perpustakaan SMAN 10 Tangerang adalah pusat informasi yang menyediakan berbagai koleksi buku pelajaran, novel, jurnal ilmiah, dan bahan referensi lainnya. Dilengkapi dengan fasilitas digital seperti komputer dan televisi, perpustakaan ini mendukung siswa dalam menyelesaikan tugas, mengeksplorasi minat baca, dan memperluas wawasan mereka. Dengan suasana yang nyaman dan tenang, perpustakaan menjadi ruang yang ideal bagi siswa untuk belajar, membaca, atau sekadar mencari inspirasi.',
                'images' => 'Facility_photos/Perpustakaan.jpg'
            ]
            ]);
}
}
