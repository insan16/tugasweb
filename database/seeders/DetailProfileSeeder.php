<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('pengalaman_kerja')->insert([
    			'nama' => $faker->name,
    			'jabatan' => $faker->jobTitle(),
    			'tahun_masuk' => $faker->year(),
    			'tahun_keluar' => $faker->year()
    		]);
 
    	}
    }
}
