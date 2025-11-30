<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            "name" => "shopia",
            "email" => "sop@gmail.dot",
            "password" => Hash::make("copia")
        ]);

        Admin::create([
            "name" => "Yina",
            "email" => "yin@gmail.dot",
            "password" => Hash::make("yina02")
        ]);

        Admin::create([
            "name" => "Carissa",
            "email" => "car@gmail.dot",
            "password" => Hash::make("karisa")
        ]);
    }
}
