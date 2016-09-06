<?php

use Illuminate\Database\Seeder;

class NarrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $narration = [
            ['desc' => "The sound of screams can be heard from a distance.", 'segmentId' => 1], 
            ['desc' => "Vision blurry. Trying to focus.", 'segmentId' => 1],
            ['desc' => "Sue, tries to wake you up. Says something is wrong. Everybody is scared.", 'segmentId' => 1], 
            ['desc' => "Everyone was going about their own business. A normal day.", 'segmentId' => 1],
            ['desc' => "Out of nowhere, an eerie buzzing sound. Then a flash of light from the outside.", 'segmentId' => 1],
            ['desc' => "The building was engulfed in light.", 'segmentId' => 1],
            ['desc' => "Screaming everywhere, then darkness.", 'segmentId' => 2],
            ['desc' => "She says there are five of you on this floor. She hasn't left the room.", 'segmentId' => 2],
            ['desc' => "She will take you to the others.", 'segmentId' => 2],
            ['desc' => "She can't think straight and needs to pull herself together", 'segmentId' => 2],
            ['desc' => "She thanks you for your concern. But it seems a lot has happened and she needs time to let it all catch up to her.", 'segmentId' => 3.5],
            ['desc' => "Sue takes you down the hallway and into an office.", 'segmentId' => 3],
            ['desc' => "You count five people.", 'segmentId' => 3],
            ['desc' => "Sue the secretary.", 'segmentId' => 3],
            ['desc' => "Ben the photographer.", 'segmentId' => 3],
            ['desc' => "Andy the copy room clerk.", 'segmentId' => 3],
            ['desc' => "Lewis the janitor.", 'segmentId' => 3],
            ['desc' => "Meagan the student.", 'segmentId' => 3],
            ['desc' => "Andy looks at you wearily.", 'segmentId' => 5],
            ['desc' => "He was having coffee with Meagan in the pantry.", 'segmentId' => 5],
            ['desc' => "Everything seemed normal up until the great flash.", 'segmentId' => 5],
            ['desc' => "He thought the power went out.", 'segmentId' => 5],
            ['desc' => "Lewis gives you an anxious look.", 'segmentId' => 5],
            ['desc' => "He was in the hallway, cleaning the floor, when the great flash happened.", 'segmentId' => 6],
            ['desc' => "Listening to his mp3 player he could not have heard anything.", 'segmentId' => 6],
            ['desc' => "When the lights went out, he panicked and slipped, injuring himself.", 'segmentId' => 6],
            ['desc' => "Meagan shifts in her seat.", 'segmentId' => 6],
            ['desc' => "Meagan just had an argument with her father before heading out to the office.", 'segmentId' => 7],
            ['desc' => "She's worried about him. And feels guilty.", 'segmentId' => 7],
            ['desc' => "Someone cleared their throat, Ben looks uncomfortable.", 'segmentId' => 7],
            ['desc' => "Ben says he's alright.", 'segmentId' => 8],
            ['desc' => "He was hired to do a photo shoot for this month's circular.", 'segmentId' => 8],
            ['desc' => "While taking a photo of the staff.", 'segmentId' => 8],
            ['desc' => "He glimpsed a shadow of a person behind one of the staff members.", 'segmentId' => 8],
            ['desc' => "The sight shocked him momentarily, then the lights went out.", 'segmentId' => 8],
        ];

        foreach($narration as $narrate) {
            $insertId = DB::table('Narration')->insertGetId($narrate);
            DB::table('Segment')->insert(['chapterId' => 1, 'segmentId' => $narrate['segmentId'], 'narrationId' => $insertId]);
        }
    }
}
