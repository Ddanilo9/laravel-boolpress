<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Frutta', 'Pesce'. 'Vegetariano', 'Plastica', 'Senza lattosio', 'Sicurezza', 'Audio'];

        foreach ($tags as $tagName) {
            $t = new Tag();
            $t->name = $tagName;
            $t->slug = STR::slug($tagName);

            $t->save();
        }
    }
}
