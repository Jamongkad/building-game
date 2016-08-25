<?php

use Illuminate\Database\Seeder;

class ResponseSegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('SegmentResponse')->insert([
            ['chapterId' => 1, 'segmentId' => 1, 'responseId' => 1],
            ['chapterId' => 1, 'segmentId' => 1, 'responseId' => 2],
            ['chapterId' => 1, 'segmentId' => 2, 'responseId' => 3],
            ['chapterId' => 1, 'segmentId' => 2, 'responseId' => 4],
        ]);
    }
}
