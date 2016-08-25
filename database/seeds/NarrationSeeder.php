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
        DB::table('Narration')->insert([
            ['desc' => "Sound of screams echo...<br/> 
                Vision blurry. Trying to focus...<br/>
                People weeping...<br/>
                The world slowly materializes...<br/>
                Clarity is returning...<br/>"], 
            ['desc' => "Sue nudges you. Says something is wrong. She says everybody is scared."], 
            ['desc' => "She says, everybody was going about their own business. A normal day.
                Out of nowhere, an eerie buzzing sound. Then a flash of light from the outside.
                Building was engulfed in light.
            "],
            ['desc' => "Screaming everywhere, then darkness"],
            ['desc' => "She says there are five of you on this floor. She hasn't left the room."],
            ['desc' => "She will take you to the others."],
        ]);
        //
    }
}
