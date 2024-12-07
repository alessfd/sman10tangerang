<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Ramsey\Uuid\Type\Integer;

class SchoolProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('school_profiles')->insert([
            'name' => "SMAN 10 TANGERANG",
            'visi' => 'Terwujudnya Peserta Didik yang Berakhlaq Mulia, Berkarakter dan Memiliki Wawasan Global Dalam Memanfaatkan Ilmu dan Teknologi',
            'email' => "sman10tangkot@gmail.com",
            'npsn' => "20606852",
            'phone_number' => "3552",
            'description' => "Ini merupakan Sekolah yang",
            'created_at' => now(),
            'address' => "Jln. KH. Hasyim Ashari Gg. Sasak Poris Plawad Indah Cipondoh Kota Tangerang 15141",
            'misi' => json_encode([
                'Membentuk Peserta Didik yang Beriman, Bertaqwa dan Bertanggungjawab Kepada Tuhan Yang Maha Esa.',
                'Menumbuhkan Kecerdasan Spritual, Intelektual, Emosional dan Peserta Didik.',
                'Menyelenggaraan Pendidikan Berintegritas Tinggi untuk Membentuk Manusia yang Berkarakter dan Kompetitif.',
                'Menghasilkan Sumber Daya Manusia yang berkualitas dan Mampu Menghadapi Tantangan Global.',
                'Menjalin Komunikasi Kemitraan dengan Instansi dan Organisasi yang Mampu Memberikan Kontribusi Terhadap Kualitas Hasil Pendidikan.',
            ]),
        ]);
    }
}
