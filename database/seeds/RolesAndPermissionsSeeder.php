<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

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
        app()['cache']->forget('spatie.permission.cache');

        $user = factory(\App\User::class)->create();

        $user->assignRole('user');

        Role::create(['name' => 'admin']);

        $admin = factory(\App\User::class)->create([
            'name' => 'Kevin Chisholm',
            'email' => 'kevinjchisholm@gmail.com',
        ]);

        $admin2 = factory(\App\User::class)->create([
            'name' => 'Andrew Rohn',
            'email' => 'ahrohn92@gmail.com',
        ]);

        $admin->assignRole('admin');
        $admin2->assignRole('admin');
    }
}
