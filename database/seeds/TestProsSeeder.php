<?php

use Illuminate\Database\Seeder;

class TestProsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\testPro::class, 1000)->create();
    }
}
