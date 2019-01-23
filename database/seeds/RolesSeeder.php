<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $super_admin = [
            'super-delete' => true,
            'super-add' => true,
            'super-update' => true,
            'super-view' => true,
        ];

        $office_clerk = [
            'clerk-delete' => true,
            'clerk-add' => true,
            'clerk-update' => true,
            'clerk-view' => true,
        ];

        $incubatee = [
            'incubatee-delete' => true,
            'incubatee-add' => true,
            'incubatee-update' => true,
            'incubatee-view' => true,
        ];

        $partner = [
            'partner-delete' => true,
            'partner-add' => true,
            'partner-update' => true,
            'partner-view' => true,
        ];

        $super_user = Role::create([
            'name' => 'app-admin',
            'display_name'=>'App Admin',
            'permissions' =>$super_admin,
            'guard_name'=>'web'
        ]);

        $clerk_user1 = Role::create([
            'name' => 'incubatee',
            'display_name'=>'Incubatee',
            'permissions' =>$incubatee,
            'guard_name'=>'web'
        ]);

        $partner_1 = Role::create([
            'name' => 'partner',
            'display_name'=>'Partner',
            'permissions' =>$partner,
            'guard_name'=>'web'
        ]);

        $clerk_user = Role::create([
            'name' => 'clerk',
            'display_name'=>'PR & Marketing',
            'permissions' =>$office_clerk,
            'guard_name'=>'web'
        ]);
    }
}
