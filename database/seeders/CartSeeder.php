<?php


namespace Database\Seeders;

use App\Models\Carts;
use Illuminate\Database\Seeder;
use App\Models\SubCategories;
use Carbon\Carbon;

class CartSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            ['id' => 1, 'user_id' => 1, 'created_at' => $now, 'updated_at' => $now],
        ];

        Carts::insert($data);
    }
}
