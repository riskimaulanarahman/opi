<?php

namespace Database\Seeders;

use App\Models\Sidemenu;
use Illuminate\Database\Seeder;

class SidemenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var array */
        $access_link = [
            [
                'name' => 'Dashboard',
                'parent_id' => 0,
                'sort_order' => 0,
                'slug' => '/',
            ],
            [
                'name' => 'Advance',
                'parent_id' => 0,
                'sort_order' => 1,
                'slug' => '',
            ],
        ];

        foreach ($access_link as $key => $sidemenu) {
            Sidemenu::create($sidemenu);
        }
    }
}