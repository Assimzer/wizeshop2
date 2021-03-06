<?php

namespace Database\Seeders;

use DataTypesTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(CategorysTableSeeder::class); 
        $this->call(ProductsTableSeeder::class);

        // $this->call([
        //     DataTypesTableSeeder::class,
        //     DataRowsTableSeeder::class,
        //     MenusTableSeeder::class,
        //     MenuItemsTableSeeder::class,
        //     RolesTableSeeder::class,
        //     PermissionsTableSeeder::class,
        //     PermissionRoleTableSeeder::class,
        //     SettingsTableSeeder::class,
       
        
        //     CategoriesTableSeeder::class,
        //     UsersTableSeeder::class,
        //     PostsTableSeeder::class,
        //     PagesTableSeeder::class,
        //     TranslationsTableSeeder::class,
        //     PermissionRoleTableSeeder::class,
        // ]);
       
    }
}
