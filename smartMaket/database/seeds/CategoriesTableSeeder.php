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
			['id' => 1, 'name' => 'Rau, củ, quả','slug'=>'Raucuqua'],
			['id' => 2, 'name' => 'Hải sản nước ngọt','slug'=>'Haisannuocngot'],
			['id' => 3, 'name' => 'Hải sản nước mặn','slug'=>'Haisannuocman'],
			['id' => 4, 'name' => 'Gia cầm','slug'=>'Giacam'],
			['id' => 5, 'name' => 'Gia súc','slug'=>'Giasuc'],
			['id' => 6, 'name' => 'Gia vị','slug'=>'Giavi'],
			['id' => 7, 'name' => 'Đồ khô','slug'=>'Dokho'],
			['id' => 8, 'name' => 'Trái cây','slug'=>'Traicay'],                   		
		]);
    }
}
