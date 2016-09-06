<?php

use Illuminate\Database\Seeder;

class SegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Segment')->insert([
            ['chapterId' => 1, 'segmentId' => 1, 'narrationId' => 1],
            ['chapterId' => 1, 'segmentId' => 1, 'narrationId' => 2],
            ['chapterId' => 1, 'segmentId' => 1, 'narrationId' => 3],
            ['chapterId' => 1, 'segmentId' => 1, 'narrationId' => 4],
            ['chapterId' => 1, 'segmentId' => 1, 'narrationId' => 5],
            ['chapterId' => 1, 'segmentId' => 1, 'narrationId' => 6],
            ['chapterId' => 1, 'segmentId' => 1, 'narrationId' => 7],
            ['chapterId' => 1, 'segmentId' => 1, 'narrationId' => 8],
            ['chapterId' => 1, 'segmentId' => 1, 'narrationId' => 9],
            ['chapterId' => 1, 'segmentId' => 2, 'narrationId' => 10],
            ['chapterId' => 1, 'segmentId' => 2, 'narrationId' => 11],
            ['chapterId' => 1, 'segmentId' => 2, 'narrationId' => 12],
        ]);
    }
}
