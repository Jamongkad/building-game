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
        $response = [
            ['desc' => "What happened?", 'choiceToSegment' => 2, 'belongsToSegment' => 1],
            ['desc' => "Calm her down. Everything is going to alright.", 'choiceToSegment' => 3.5, 'belongsToSegment' => 2],
            ['desc' => "Take me to them.", 'choiceToSegment' => 3, 'belongsToSegment' => 3.5],
            ['desc' => "Take me to them.", 'choiceToSegment' => 3, 'belongsToSegment' => 2],
            ['desc' => "Can you all give me an account of what happened?", 'choiceToSegment' => 5, 'belongsToSegment' => 3],
            ['desc' => "Lewis, is there something you want to say?", 'choiceToSegment' => 6, 'belongsToSegment' => 5],
            ['desc' => "Meagan, are you alright?", 'choiceToSegment' => 7, 'belongsToSegment' => 6],
            ['desc' => "Ben, are you hurt?", 'choiceToSegment' => 8, 'belongsToSegment' => 7],
            ['desc' => "Go ahead Sue.", 'choiceToSegment' => 9, 'belongsToSegment' => 8],
        ];

        foreach($response as $r) {
            $insertId = DB::table('Response')->insertGetId($r);
            DB::table('SegmentResponse')->insert([
                'chapterId' => 1, 'segmentId' => $r['belongsToSegment'], 'responseId' => $insertId
            ]);
        }
    }
}
