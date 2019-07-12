<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = ['readUser', 'editUser', 'readPermission', 'editPermission', 'readMovie', 'editMovie', 'readActor', 'editActor'];
        foreach($permissions as $permission){
            $perm = new Permission();
            $perm->name = $permission;
            $perm->save();
            $perm->users()->attach(1);
            if($perm->id % 2){
                $perm->users()->attach(2);
            }
        }
    }
}
