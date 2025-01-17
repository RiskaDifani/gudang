<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'level' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'pegawai',
            'email' => 'pegawai@gmail.com',
            'password' => Hash::make('pegawai123'),
            'level' => 'gudang',
        ]);
    }
}
