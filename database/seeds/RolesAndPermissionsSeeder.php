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
        Permission::create(['name' => 'add-staff']);
        Permission::create(['name' => 'edit-staff']);
        Permission::create(['name' => 'delete-staff']);
        Permission::create(['name' => 'view-staff']);
        Permission::create(['name' => 'view-staffs']);
        Permission::create(['name' => 'add-student']);
        Permission::create(['name' => 'edit-student']);
        Permission::create(['name' => 'delete-student']);
        Permission::create(['name' => 'view-student']);

        //assigned permissions to created roles     
        $admin->givePermissionTo(Permission::all());
        
        $staff->givePermissionTo(['edit-staff','view-staff','add-student','edit-student','delete-student','view-student']);

        $student->givePermissionTo(['view-student','edit-student']);
        
    }
}
