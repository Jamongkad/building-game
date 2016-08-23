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
            ['chapterId' => 1, 'decisionId' => 2, 'ifTrueDecisionId' => 3, 'ifFalseDecisionId' => 4],
            ['chapterId' => 1, 'decisionId' => 3, 'ifTrueDecisionId' => 5, 'ifFalseDecisionId' => 0],
            ['chapterId' => 1, 'decisionId' => 4, 'ifTrueDecisionId' => 5, 'ifFalseDecisionId' => 0]
        ]);
    }
}
