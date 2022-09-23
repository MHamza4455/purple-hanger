<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use Str;
class PermissionSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data= [
            'Manage User',
            'Manage Catogery Level 1',
            'Manage Catogery Level 2',
            'Manage Catogery Level 3',
            'Manage Products',
            'Manage Admin',
            'Manage table',
        ];

        foreach($data as $permission){
            Permission::create([
                'name'=>$permission,
                'slug'=> Str::slug($permission)
            ]);
        }
    }
}
