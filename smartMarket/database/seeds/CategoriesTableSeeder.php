<?php

use Illuminate\Database\Seeder;
use App\Common\Constant;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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


		$password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // serect
		DB:table('users')->insert([
			['id' => 1, 'name'=> 'admin', 'email' => 'admin@gmail.com', 'role' => Constant::IS_ADMIN]
		]);
    }
}