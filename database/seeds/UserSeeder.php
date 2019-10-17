<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'               => 'admin',
            'email'              => 'admin@admin.com',
            'password'           => bcrypt('admin123'),
            'is_fully_registered'=> true,
        ]);
        $admin->assignRole('admin');
        $admin->save();
        $staff = User::create([
            'name'                => 'staff',
            'email'               => 'staff@admin.com',
            'password'            => bcrypt('staff123'),
            'is_fully_registered' => true,
        ]);
        $staff->assignRole('staff');
        $staff->save();
        $student = User::create([
            'name'                => 'student',
            'email'               => 'student@admin.com',
            'password'            => bcrypt('student123'),
            'roll_no'             => '8000',
            'is_fully_registered' => true,
        ]);
        $student->assignRole('student');
        $student->save();
    }
}
