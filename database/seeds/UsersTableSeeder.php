<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'root';
        $user->email = 'root@root.com';
        $user->password = bcrypt('secret');
        $user->api_token = substr(md5(rand()), 0, 60);
        $user->save();
    }
}
