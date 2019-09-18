<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        User::truncate();

        $adminRole = Role::create(['name' => 'Admin']);
        $writerRole = Role::create(['name' => 'Writer']);

        $admin = new User;
        $admin->name = 'John Doe';
        $admin->email = 'john@doe.com';
        $admin->password = bcrypt('password');
        $admin->save();

        $admin->assignRole($adminRole);

        $writer = new User;
        $writer->name = 'Jane Doe';
        $writer->email = 'jane@doe.com';
        $writer->password = bcrypt('password');
        $writer->save();

        $writer->assignRole($writerRole);
    }
}
