<?php

use Illuminate\Database\Seeder;
use App\Models\Member;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Member::query()->insert([
            'name' => "backend",
            'email' => "null@null.com",
            'password' => "ts3esport_secret",
        ]);
    }
}
