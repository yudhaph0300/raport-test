<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'name' => 'M Yudha Pamungkas',
            'kelas' => 'XI'
        ]);
        Siswa::create([
            'name' => 'Gisela Ramadinawati',
            'kelas' => 'X'
        ]);
        Siswa::create([
            'name' => 'Ari Lasso',
            'kelas' => 'X'
        ]);
        MataPelajaran::create([
            'name' => 'Bahasa Indonesia'
        ]);
        MataPelajaran::create([
            'name' => 'Matematika'
        ]);
        Nilai::create([
            'siswa_id' => 1,
            'matapelajaran_id' => 1,
            'nilai' => 80
        ]);
        Nilai::create([
            'siswa_id' => 1,
            'matapelajaran_id' => 2,
            'nilai' => 75
        ]);
        Nilai::create([
            'siswa_id' => 2,
            'matapelajaran_id' => 1,
            'nilai' => 78
        ]);
        Nilai::create([
            'siswa_id' => 2,
            'matapelajaran_id' => 2,
            'nilai' => 72
        ]);
        Nilai::create([
            'siswa_id' => 3,
            'matapelajaran_id' => 1,
            'nilai' => 82
        ]);
        Nilai::create([
            'siswa_id' => 3,
            'matapelajaran_id' => 2,
            'nilai' => 70
        ]);
    }
}
