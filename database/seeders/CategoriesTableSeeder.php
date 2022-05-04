<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1;$i < 4;$i++) {
            DB::table('categories')->insert([
                'id' => $i,
                'name' =>'Product '. $i,
                'code' => rand(10,100),
                'description' => 'orci luctus in. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum viverra convallis. Vestibulum cursus erat a nibh posuere rhoncus. Aenean iaculis laoreet vehicula. Duis mollis odio in interdum accumsan. Etiam eleifend mattis ante sed tristique. Praesent eget urna elit. Duis quis quam vel arcu efficitur semper. Quisque pellentesque est enim, et sollicitudin mauris porta eget. Donec dignissim, tellus tincidunt lacinia vehicula, justo elit porta metus, id feugiat dui ex quis purus.',
                'price' => rand(10,1500),
                'in_stock' => 1,
            ]);
        }
    }
}
