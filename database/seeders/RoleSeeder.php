<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Cliente']);
        $role3 = Role::create(['name' => 'Desactivado']);

        $permission1 = Permission::create(['name' => 'Usuarios'])->syncRoles([$role1]);
        $permission2 = Permission::create(['name' => 'Plataforma'])->syncRoles([$role1]);
        $permission3 = Permission::create(['name' => 'Membresias'])->syncRoles([$role1]);
        $permission3 = Permission::create(['name' => 'Ejercicios'])->syncRoles([$role1]);
        $permission3 = Permission::create(['name' => 'Rutinas'])->syncRoles([$role1]);
        $permission3 = Permission::create(['name' => 'Plan'])->syncRoles([$role1]);
        $permission3 = Permission::create(['name' => 'Calendario'])->syncRoles([$role2]);
        $permission3 = Permission::create(['name' => 'Desactivado'])->syncRoles([$role3]);
    }
}
