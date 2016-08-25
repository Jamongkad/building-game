<?php

use Illuminate\Database\Seeder;

class ResponseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Response')->insert([
            ['desc' => "What's going on?", 'choiceToSegment' => 2],
            ['desc' => "What happen?", 'choiceToSegment' => 2],
            ['desc' => "Are there any survivors?", 'choiceToSegment' => 3],
            ['desc' => "Take me to them.", 'choiceToSegment' => 4],
        ]);
    }
}
