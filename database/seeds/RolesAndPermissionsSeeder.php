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
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles 
        $admin=Role::create(['name' => 'admin']);
        $staff=Role::create(['name' => 'staff']);
        $student=Role::create(['name' => 'student']);

        //create permission
        Permission::create(['name' => 'add staff']);
        Permission::create(['name' => 'edit staff']);
        Permission::create(['name' => 'delete staff']);
        Permission::create(['name' => 'view staff']);

        //assigned permissions to created roles     
        $admin->givePermissionTo(Permission::all());
        
        $staff->givePermissionTo(['edit staff','delete staff','view staff']);
        
    }
}
