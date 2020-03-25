<?php

use Illuminate\Database\Seeder;

class BiersoortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('biersoort')->insert([
            'naam' => 'Champagnebier',
            'gisting' => 'Lage gisting',
        ]);

        DB::table('biersoort')->insert([
            'naam' => 'Pils',
            'gisting' => 'Lage gisting',
        ]);

        DB::table('biersoort')->insert([
            'naam' => 'Bokbier',
            'gisting' => 'Lage gisting',
        ]);

        DB::table('biersoort')->insert([
            'naam' => 'Lambiek bier',
            'gisting' => 'Gemixte gisting',
        ]);

        DB::table('biersoort')->insert([
            'naam' => 'Geuze bier',
            'gisting' => 'Gemixte gisting',
        ]);

        DB::table('biersoort')->insert([
            'naam' => 'IPA bier',
            'gisting' => 'Hoge gisting',
        ]);
    }
}
