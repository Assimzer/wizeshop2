<?php

namespace Database\Seeders;
use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Database\Seeder;


class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            [
                'name' => 'Fruité',
                'slug' => 'fruite',
                'created_at' => $now,
                'updated_at' => $now

            ],
        ]);
        
        Category::insert([
            [
                'name' => 'Boisson',
                'slug' => 'boisson',
                'created_at' => $now,
                'updated_at' => $now

            ],
            
        ]);
        Category::insert([
            [
                'name' => 'Bonbon',
                'slug' => 'bonbon',
                'created_at' => $now,
                'updated_at' => $now
   
           ],
        ]);
        Category::insert([
            [
                'name' => 'Gourmand',
                'slug' => 'gourmand',
                'created_at' => $now,
                'updated_at' => $now

            ],                
        ]);        
    }
}
