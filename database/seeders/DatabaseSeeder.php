<?php

namespace Database\Seeders;

use App\Models\BlogPosts;
use App\Models\Category;
use App\Models\Major;
use App\Models\School;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'sso_id' => '1000220001',
            'name' => 'The Watcher',
            'email' => 'super@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('root'),
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory(24)->create();

        Category::insert([
            [
                'name' => 'General',
                'slug' => 'general',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, repudiandae!',
                'created_at' => now()->subDays(mt_rand(0, 300)),
                'updated_at' => now()->subDays(mt_rand(0, 300)),
            ],
            [
                'name' => 'News',
                'slug' => 'news',
                'description' => 'Eos repellendus ut dolores neque perferendis ducimus suscipit similique mollitia!',
                'created_at' => now()->subDays(mt_rand(0, 300)),
                'updated_at' => now()->subDays(mt_rand(0, 300)),
            ],
            [
                'name' => 'Studential',
                'slug' => 'studential',
                'description' => 'Nihil animi commodi unde suscipit doloremque officia tenetur rerum inventore!',
                'created_at' => now()->subDays(mt_rand(0, 300)),
                'updated_at' => now()->subDays(mt_rand(0, 300)),
            ],
        ]);

        BlogPosts::factory(100)->create();

        School::insert([
            [
                'name' =>  'Fakultas Teknik Elektro',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>  'Fakultas Rekayasa Industri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>  'Fakultas Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>  'Fakultas Ekonomi dan Bisnis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>  'Fakultas Ilmu Terapan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>  'Fakultas Komunikasi dan Bisnis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' =>  'Fakultas Industri Kreatif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        Major::insert([
            [
                'name' => 'S1 Teknik Telekomunikasi', 'school_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Teknik Elektro', 'school_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Teknik Fisika', 'school_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Teknik Komputer', 'school_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Teknik Biomedis', 'school_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Teknik Sistem Energi', 'school_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S2 Teknik Elektro', 'school_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Teknik Industri', 'school_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Sistem Informasi', 'school_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Teknik Logistik', 'school_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S2 Teknik Industri', 'school_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S2 Sistem Informasi', 'school_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Informatika', 'school_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Teknologi Informasi', 'school_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Rekayasa Perangkat Lunak', 'school_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 PJJ Informatika', 'school_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Sains Data', 'school_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S2 Informatika', 'school_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S2 Ilmu Forensik', 'school_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S3 Informatika', 'school_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Manajemen', 'school_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Akuntansi', 'school_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S2 Manajemen', 'school_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S2 PJJ Manajemen', 'school_id' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'D3 Teknologi Telekomunikasi', 'school_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'D3 Rekayasa Perangkat Lunak Aplikasi', 'school_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'D3 Sistem Informasi', 'school_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'D3 Sistem Informasi Akuntansi', 'school_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'D3 Teknologi Komputer', 'school_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'D3 Manajemen Pemasaran', 'school_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'D3 Perhotelan', 'school_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Terapan Teknologi Rekayasa Multimedia', 'school_id' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Administrasi Bisnis', 'school_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Ilmu Komunikasi', 'school_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Hubungan Masyarakat Digital', 'school_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Penyiaran Digital', 'school_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S2 Ilmu Komunikasi', 'school_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S2 Administrasi Bisnis', 'school_id' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Desain Komunikasi Visual', 'school_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Desain Produk', 'school_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Desain Interior', 'school_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Kriya', 'school_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S1 Seni Rupa', 'school_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'S2 Desain', 'school_id' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
