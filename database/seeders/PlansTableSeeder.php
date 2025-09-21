<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            ['plan_id' => 0, 'name' => 'free', 'price' => 0],
            ['plan_id' => 1, 'name' => 'bronze', 'price' => 3999],
            ['plan_id' => 2, 'name' => 'silver', 'price' => 4999],
            ['plan_id' => 3, 'name' => 'gold', 'price' => 7999],
        ]);
    }
}
