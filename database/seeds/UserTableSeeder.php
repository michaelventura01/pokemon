<?php
//seeder de relacion
use Illuminate\Database\Seeder;
use pokemon\Role;
use pokemon\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //forma de query
        $role_user = Role::where('name','user')->first();
        $role_admin = Role::where('name','Admin')->first();

        $user = new User();
        $user->name = "User";
        $user->email = "user@mail.com";
        $user->password = bcrypt('query');
        $user->save();

        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@email.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
