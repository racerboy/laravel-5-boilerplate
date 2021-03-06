<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon as Carbon;

class UserTableSeeder extends Seeder {

	public function run() {

		//Add the master administrator, user id of 1
		DB::table(config('auth.table'))->truncate();

		$user = array(
			'name' => 'Admin Istrator',
			'email' => 'admin@admin.com',
			'password' => bcrypt('1234'),
			'confirmation_code' => md5(uniqid(mt_rand(), true)),
			'confirmed' => true,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		);

		DB::table(config('auth.table'))->insert($user);

		$user = array(
			'name' => 'Default User',
			'email' => 'user@user.com',
			'password' => bcrypt('1234'),
			'confirmation_code' => md5(uniqid(mt_rand(), true)),
			'confirmed' => true,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		);

		DB::table(config('auth.table'))->insert($user);
	}
}