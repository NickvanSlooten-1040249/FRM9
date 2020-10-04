<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsertableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminrole = Role::where('name','admin')->first();
        $userrole = Role::where('name','user')->first();

        $admin = User::create(['name'=>'admin','email'=>'admin@admin.com','password'=> bcrypt('admin')]);
        $user = User::create(['name'=>'user','email'=>'user@user.com','password'=> bcrypt('user')]);

        $admin->Roles()->attach($adminrole);
        $user->Roles()->attach($userrole);


    }
}
