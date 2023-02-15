<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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
        $user = [ [
            'username' => 'Admin',
            'name_lengkap' => 'AdminBebas',
            'jk' => 'L',
            'alamat' => 'burangrang No.31 nomor 20',
            'nomor_tlp' => '085721077423',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 'admin'
        
        ],
        [
            'username' => 'Kasie',
            'name_lengkap' => 'KasirAdaAja',
            'jk' => 'L',
            'alamat' => 'simlim no 1',
            'nomor_tlp' => '0812345678',
            'email' => 'kasir@gmail.com',
            'password' => Hash::make('kasir'),
            'role' => 'kasir'
        
        ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
