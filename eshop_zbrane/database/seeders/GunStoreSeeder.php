<?php
namespace Database\Seeders;

use App\Models\Category;
use App\Models\Gun;
use Illuminate\Database\Seeder;

class GunStoreSeeder extends Seeder
{
    public function run()
    {
        $category1 = Category::create(['name' => 'Pistols']);
        $category2 = Category::create(['name' => 'Rifles']);
        $category3 = Category::create(['name' => 'Shotguns']);

        Gun::create([
            'name' => 'Glock 19',
            'description' => 'A compact, reliable 9mm pistol.',
            'price' => 500.00,
            'category_id' => $category1->id,
        ]);

        Gun::create([
            'name' => 'AR-15',
            'description' => 'A lightweight, magazine-fed, gas-operated rifle.',
            'price' => 1200.00,
            'category_id' => $category2->id,
        ]);

        Gun::create([
            'name' => 'Remington 870',
            'description' => 'A classic pump-action shotgun.',
            'price' => 400.00,
            'category_id' => $category3->id,
        ]);
    }
}
