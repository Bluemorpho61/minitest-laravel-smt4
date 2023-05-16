<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Articles;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RoleList;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        if (DB::table('users')->count()===0){
        User::factory()->create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),
            'tipe_user'=> \App\Enums\RoleList::ADMIN
        ]);
        }

        if (DB::table('articles')->count()===0){
            Articles::create([
                'judul_artikel'=>'Test Judul Artikel',
                'isi_artikel'=>'test isi artikel',
                'user_id'=>7,
                'tanggal'=>now()->toDate()
            ]);
        }
//        Articles::factory()->create([
//           'judul_artikel'=>'contoh tok',
//            'isi_artikel'=>'testing table bang',
//            'users_id'=>Auth::user()->id,
//            'tanggal'=>date('dd-MM-yyyy',now())
//        ]);
    }
}
