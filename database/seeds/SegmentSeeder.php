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
            ['chapterId' => 1, 'segmentId' => 2, 'narrationId' => 4],
            ['chapterId' => 1, 'segmentId' => 2, 'narrationId' => 5],
            ['chapterId' => 1, 'segmentId' => 2, 'narrationId' => 6],
        ]);
    }
}
