<?php

namespace Database\Seeders;

use App\Models\Gadget;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GadgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gadget::create([
            'name' => 'Galaxy S-26 Ultra',
            'brand' => 'Samsung',
            'category' => 'Smart Phone',
            'price' => 160000,
            'stock' => 12,
        ]);
    }
}
