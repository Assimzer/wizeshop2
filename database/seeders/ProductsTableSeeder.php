<?php
namespace Database\Seeders;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'mangue / citron',
            'slug' => 'mangue-citron',
            'details' => 'voici le detail de ce produit ',
            'price' => 6,
            'description' => 'voici les grands detail de ce produist dcfjqfqenfgrq,nferqngerqgnjergnerjgnergnqeermgnqemgnerjgnergnerjngjsnmsnrtsgms gs,negnsmgsjmgnsrio ongsriongionrg n biosrnb',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'mangue / litchi',
            'slug' => 'mangue-litchi    ',
            'details' => 'voici le detail de ce produit ',
            'price' => 6,
            'description' => 'voici les grands detail de ce produist dcfjqfqenfgrq,nferqngerqgnjergnerjgnergnqeermgnqemgnerjgnergnerjngjsnmsnrtsgms gs,negnsmgsjmgnsrio ongsriongionrg n biosrnb',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'mangue / peche',
            'slug' => 'mangue-peche',
            'details' => 'voici le detail de ce produit ',
            'price' => 6,
            'description' => 'voici les grands detail de ce produist dcfjqfqenfgrq,nferqngerqgnjergnerjgnergnqeermgnqemgnerjgnergnerjngjsnmsnrtsgms gs,negnsmgsjmgnsrio ongsriongionrg n biosrnb',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'mangue / pomme',
            'slug' => 'mangue-pomme',
            'details' => 'voici le detail de ce produit ',
            'price' => 6,
            'description' => 'voici les grands detail de ce produist dcfjqfqenfgrq,nferqngerqgnjergnerjgnergnqeermgnqemgnerjgnergnerjngjsnmsnrtsgms gs,negnsmgsjmgnsrio ongsriongionrg n biosrnb',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'mangue / Fraise',
            'slug' => 'mangue-fraise',
            'details' => 'voici le detail de ce produit ',
            'price' => 6,
            'description' => 'voici les grands detail de ce produist dcfjqfqenfgrq,nferqngerqgnjergnerjgnergnqeermgnqemgnerjgnergnerjngjsnmsnrtsgms gs,negnsmgsjmgnsrio ongsriongionrg n biosrnb',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'mangue / orange',
            'slug' => 'mangue-orange',
            'details' => 'voici le detail de ce produit ',
            'price' => 6,
            'description' => 'voici les grands detail de ce produist dcfjqfqenfgrq,nferqngerqgnjergnerjgnergnqeermgnqemgnerjgnergnerjngjsnmsnrtsgms gs,negnsmgsjmgnsrio ongsriongionrg n biosrnb',
            'category_id' => Category::all()->random()->id
        ]);
    }
}
