<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //seeder users
        DB::table('users')->insert([
            'username' => 'Admin',
            'name_lengkap' => 'AdminAllah',
            'jk' => 'L',
            'alamat' => 'burangrang No.31 nomor 20',
            'nomor_tlp' => '085721077423',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 'admin'
        ]);
    }
}
