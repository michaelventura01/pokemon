<?php

use Illuminate\Database\Seeder;
//agregar modelo
use pokemon\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "admin";
        $role->description = "Administrator";
        $role->save();

        $role = new Role();
        $role->name = "user";
        $role->description = "user";
        $role->save();
    }
}
