<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(ProfilDesaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(SubCategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(CartSeeder::class);
        // $this->call(PerangkatDesaSeeder::class);
        // $this->call(PengaturanAplikasiSeeder::class);
    }
}