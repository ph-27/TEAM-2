<?php

use Illuminate\Database\Seeder;
use App\Common\Constant;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // serect
		DB:table('users')->insert([
			['id' => 1, 'name'=> 'admin', 'email' => 'admin@gmail.com', 'role' => Constant::IS_ADMIN]
		]);
    }
}
