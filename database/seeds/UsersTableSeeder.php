<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User;
        $user->name = 'John Doe';
        $user->email = 'john@doe.com';
        $user->password = bcrypt('password');
        $user->save();

        $user = new User;
        $user->name = 'Jane Doe';
        $user->email = 'jane@doe.com';
        $user->password = bcrypt('password');
        $user->save();
    }
}
