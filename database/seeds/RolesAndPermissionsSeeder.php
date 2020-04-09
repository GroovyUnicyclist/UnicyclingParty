<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'create tricks']);
        Permission::create(['name' => 'delete tricks']);
        Permission::create(['name' => 'edit tricks']);
        Permission::create(['name' => 'assign roles']);

        $role = Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());
        $role = Role::create(['name' => 'moderator'])
            ->givePermissionTo('delete tricks');
        $role = Role::create(['name' => 'contributor'])
            ->givePermissionTo('create tricks' ,'edit tricks');
        $role = Role::create(['name' => 'member']);
        $role = Role::create(['name' => 'guest']);
    }
}
