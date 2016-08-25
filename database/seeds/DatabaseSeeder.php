<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NarrationSeeder::class);
        $this->call(DecisionTableSeeder::class);
        $this->call(ResponseTableSeeder::class);
        $this->call(ResponseSegmentSeeder::class);
        $this->call(SegmentSeeder::class);
    }
}
