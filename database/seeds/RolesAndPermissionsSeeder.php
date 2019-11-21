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

        Permission::create(['name' => 'assign unis']);
        Permission::create(['name' => 'create unis']);
        Permission::create(['name' => 'claim unis']);

        $role = Role::create(['name' => 'site admin'])
            ->givePermissionTo(Permission::all());

        /**** Club Specific Roles ****/
        $role = Role::create(['name' => 'osunicycle admin'])
            ->givePermissionTo(['claim unis', 'assign unis', 'create unis']);

        $role = Role::create(['name' => 'osunicycle manager'])
            ->givePermissionTo(['claim unis', 'assign unis']);

        $role = Role::create(['name' => 'osunicycle member'])
            ->givePermissionTo(['claim unis']);
        /**** ------------------ ****/

        $role = Role::create(['name' => 'site member']);
        $role = Role::create(['name' => 'guest']);
    }
}
