<?php

use Illuminate\Database\Seeder;

class ChoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Choice')->insert([
            ['desc' => "Sound of screams echo...<br/> 
                Vision blurry. Trying to focus...<br/>
                People weeping...<br/>
                The world slowly materializes...<br/>
                Clarity is returning...<br/>"], 
            ['desc' => "Sue nudges you. Says something is wrong. She says everybody is scared."], 
            ['desc' => "What's going on?"],
            ['desc' => "What happen?"],
            ['desc' => "She says, everybody was going about their own business. A normal day.
                Out of nowhere, an eerie buzzing sound. Then a flash of light from the outside.
                Building was engulfed in light.
            "],
            ['desc' => "Screaming everywhere, then darkness"],
        ]);
    }
}
