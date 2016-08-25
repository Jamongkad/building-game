<?php

use Illuminate\Database\Seeder;

class DecisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Decision')->insert([
            ['chapterId' => 1, 'segmentId' => 1, 'choiceADecisionSegment' => 3, 'choiceBDecisionSegment' => 3],
        ]);
    }
}
