<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories')->truncate();
    	DB::table('categories')->insert([
			['id' => 1, 'name' => 'Rau, củ, quả'],
			['id' => 2, 'name' => 'Hải sản nước ngọt'],
			['id' => 3, 'name' => 'Hải sản nước mặn'],
			['id' => 4, 'name' => 'Gia cầm'],
			['id' => 5, 'name' => 'Gia súc'],
			['id' => 6, 'name' => 'Gia vị'],
			['id' => 7, 'name' => 'Đồ khô'],
			['id' => 8, 'name' => 'Trái cây'],                    		
		]);
    }
}