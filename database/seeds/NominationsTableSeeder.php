<?php

use Illuminate\Database\Seeder;

class NominationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nominee = factory(\App\User::class)->create();
        $nominator = factory(\App\User::class)->create();


        factory(\App\Nomination::class)->create(
            ['nominee_id' => $nominee->id,
             'nominator_id' => 1
            ]);

        factory(\App\Nomination::class)->create(
            ['nominee_id' => 1,
             'nominator_id' => $nominator->id
            ]);
    }
}
