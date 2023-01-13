<?php

namespace Database\Seeders;

use App\Models\Sequence;
use Illuminate\Database\Seeder;

class SequenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sequence = array(
            array(
                'title' => 'Dashboard',
            ),
            array(
                'title' => 'Admin',
            ),
            array(
                'title' => 'Request & Approval',
            ),
            array(
                'title' => 'Master',
            ),
        );

        foreach ($sequence as $item) {
            Sequence::create($item);
        }
    }
}
