<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Carbon;
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
            'nomor_telepon' => '085721077423',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 'admin'
        ],
        [
            'username' => 'Kasir',
            'name_lengkap' => 'KasirAdaAja',
            'jk' => 'L',
            'alamat' => 'simlim no 1',
            'nomor_telepon' => '0812345678',
            'email' => 'kasir@gmail.com',
            'password' => Hash::make('kasir'),
            'role' => 'kasir'
        ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }

        DB::table('barang')->insert([[
            'nama_barang' => 'Kursi Barber',
            'stock' => '5',
            'harga' => '4000000',
        ],
        [
            'nama_barang' => 'Gunting Rambut',
            'stock' => '23',
            'harga' => '12000',
        ],
        [
            'nama_barang' => 'Pisau Cukur',
            'stock' => '16',
            'harga' => '30000',
        ],
        [
            'nama_barang' => 'Handuk',
            'stock' => '30',
            'harga' => '50000',
        ],
        [
            'nama_barang' => 'Mesin Pencukur',
            'stock' => '8',
            'harga' => '1250000',
        ],]
    );

    DB::table('barber')->insert([[
        'nama_lengkap' => 'Udin Hasanudin',
        'email' => 'udin@gmail.com',
        'usia' => '24',
        'jenis_kelamin' => 'L',
        'alamat' => 'Jl. Kenanga No.12',
        'nomor_telepon' => '08971531234',
    ],
    [
        'nama_lengkap' => 'Marlan Asyifa',
        'email' => 'asyifa@gmail.com',
        'usia' => '28',
        'jenis_kelamin' => 'P',
        'alamat' => 'Jl. Kota Timur No.231',
        'nomor_telepon' => '08617452182',
    ],
    [
        'nama_lengkap' => 'Farhan Ar-Marhan',
        'email' => 'farhan@gmail.com',
        'usia' => '25',
        'jenis_kelamin' => 'L',
        'alamat' => 'Gg. Putri Agung No.13',
        'nomor_telepon' => '08011221761',
    ],]
    );

    DB::table('member')->insert([[
        'nama_member' => 'Harlan Maryam',
        'email' => 'harmar@gmail.com',
        'usia' => '37',
        'jenis_kelamin' => 'L',
        'alamat' => 'Komplek Jeruk Jl. Kejanjani 1 No.5',
        'nomor_telepon' => '08916582612',
        'barcode' => '321123123',
        'level' => 'Gold',
    ],
    [
        'nama_member' => 'Nafisa Afifah',
        'email' => 'nafifa@gmail.com',
        'usia' => '21',
        'jenis_kelamin' => 'P',
        'alamat' => 'Komplek Regency Queen Jl. Utama No.1',
        'nomor_telepon' => '08976432101',
        'barcode' => '321111111',
        'level' => 'Platinum',
    ],]
    );

    DB::table('transaksi')->insert([
        'kasir_id' => '2',
        'total_harga' => '500000',
        'sistem_pembayaran' => 'Credit/Debit',
        'waktu' => Carbon::now()->format('Y-m-d H:i:s'),
    ],);
    }
}
