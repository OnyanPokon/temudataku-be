<?php


namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\SubCategories;
use Carbon\Carbon;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            [
                'subcategory_id' => 1,
                'title' => 'Mentoring Data Science 1-on-1',
                'description' => 'Sesi privat dengan mentor profesional di bidang data science.',
                'price' => 500000,
                'is_available' => true,
                'thumbnail_url' => 'https://example.com/img/mentoring-1on1.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subcategory_id' => 2,
                'title' => 'Group Mentoring Data Science',
                'description' => 'Belajar data science secara kelompok dengan bimbingan mentor.',
                'price' => 300000,
                'is_available' => true,
                'thumbnail_url' => 'https://example.com/img/mentoring-group.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subcategory_id' => 3,
                'title' => 'Customer Analysis - Data Practice',
                'description' => 'Latihan analisis customer berbasis dataset industri.',
                'price' => 750000,
                'is_available' => true,
                'thumbnail_url' => 'https://example.com/img/customer-analysis.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'subcategory_id' => 9,
                'title' => 'Bootcamp Data Analyst',
                'description' => 'Bootcamp intensif untuk menjadi Data Analyst handal.',
                'price' => 1500000,
                'is_available' => true,
                'thumbnail_url' => 'https://example.com/img/bootcamp-analyst.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        Product::insert($data);
    }
}
