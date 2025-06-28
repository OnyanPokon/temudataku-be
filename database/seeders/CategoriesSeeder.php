<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;
use Carbon\Carbon;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        
        $data = [
            ['id' => 1, 'name' => 'Mentoring', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'Practice',  'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'Bootcamp',  'created_at' => $now, 'updated_at' => $now],
        ];

        Categories::insert($data);
    }
}
