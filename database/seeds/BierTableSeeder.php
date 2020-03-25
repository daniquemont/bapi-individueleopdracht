<?php

use Illuminate\Database\Seeder;

class BierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('bier')->insert([
            'naam' => 'Grolsch Beugel',
            'merk' => 'Grolsch',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 9,
            'bitter_EBU' => 24,
            'biersoort' => 'Pils',]);

        DB::table('bier')->insert([
            'naam' => 'Hoegaarden Wit',
            'merk' => 'Hoegaarden',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 6,
            'bitter_EBU' => 12,
            'biersoort' => 'Witbier',]);
        
        DB::table('bier')->insert([
            'naam' => 'Hertog Jan',
            'merk' => 'Hertog Jan',
            'alcoholpercentage' => 5 ,
            'kleur_EBC' => 9,
            'bitter_EBU' => 24 ,
            'biersoort' => 'Pils',
        ]);

                
        DB::table('bier')->insert([
            'naam' => 'Heineken',
            'merk' => 'Heineken',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 9,
            'bitter_EBU' => 24,
            'biersoort' => 'Pils',
        ]);

                
        DB::table('bier')->insert([
            'naam' => 'Amstel',
            'merk' => 'Amstel',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 9,
            'bitter_EBU' => 24,
            'biersoort' => 'Pils',
        ]);

                
        DB::table('bier')->insert([
            'naam' => 'Bavaria',
            'merk' => 'Bavaria',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 9,
            'bitter_EBU' => 24,
            'biersoort' => 'Pils',
        ]);

                
        DB::table('bier')->insert([
            'naam' => 'Vedett Extra White',
            'merk' => 'Vedett',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 6,
            'bitter_EBU' => 16,
            'biersoort' => 'Witbier',
        ]);

                
        DB::table('bier')->insert([
            'naam' => 'Gulpener Korenwolf Wit',
            'merk' => 'Gulpener',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 6,
            'bitter_EBU' => 16,
            'biersoort' => 'Witbier',
        ]);

                
        DB::table('bier')->insert([
            'naam' => 'ST. Bernardus wit',
            'merk' => 'ST. Bernardus',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 6,
            'bitter_EBU' => 16,
            'biersoort' => 'Witbier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Grolsch Lentebok',
            'merk' => 'Grolsch',
            'alcoholpercentage' => 7,
            'kleur_EBC' => 75,
            'bitter_EBU' => 25,
            'biersoort' => 'Bokbier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Brand lentebock',
            'merk' => 'Brand',
            'alcoholpercentage' => 7,
            'kleur_EBC' => 75,
            'bitter_EBU' => 25,
            'biersoort' => 'Bokbier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Hertog Jan lentebock',
            'merk' => 'Hertog Jan',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 75,
            'bitter_EBU' => 25,
            'biersoort' => 'Bokbier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Christoffel Bock',
            'merk' => 'Christoffel',
            'alcoholpercentage' => 8,
            'kleur_EBC' => 75,
            'bitter_EBU' => 25,
            'biersoort' => 'Bokbier',
        ]);


        DB::table('bier')->insert([
            'naam' => 'Liefmans Fruitesse',
            'merk' => 'Liefmans',
            'alcoholpercentage' => 4,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Lambiek bier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Wittekerke Rosé',
            'merk' => 'Wittekerke',
            'alcoholpercentage' => 4,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Lambiek bier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Timmermans Kriek',
            'merk' => 'Timmermans',
            'alcoholpercentage' => 4,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Lambiek bier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Boon Kriek',
            'merk' => 'Kriek Boon',
            'alcoholpercentage' => 4,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Lambiek bier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Amstel radler',
            'merk' => 'Amstel',
            'alcoholpercentage' => 2,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Lambiek bier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Vintage Geuze',
            'merk' => 'Geuze',
            'alcoholpercentage' => 7,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Geuze bier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Geuze mariage parfait',
            'merk' => 'Geuze',
            'alcoholpercentage' => 8,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Geuze bier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Watergeus brut olasz',
            'merk' => 'Geuze',
            'alcoholpercentage' => 8,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Geuze bier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Oude geuze',
            'merk' => 'Geuze',
            'alcoholpercentage' => 6,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Geuze bier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Brewdog punk ipa',
            'merk' => 'Brewdog',
            'alcoholpercentage' => 6,
            'kleur_EBC' => 27,
            'bitter_EBU' => 50,
            'biersoort' => 'IPA bier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Vedett extra ipa',
            'merk' => 'Vedett',
            'alcoholpercentage' => 6,
            'kleur_EBC' => 27,
            'bitter_EBU' => 50,
            'biersoort' => 'IPA bier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Flying dog easy ipa',
            'merk' => 'Flying dog',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 27,
            'bitter_EBU' => 50,
            'biersoort' => 'IPA bier',
        ]);


        DB::table('bier')->insert([
            'naam' => 'Brewdog dead pony club',
            'merk' => 'Brewdog',
            'alcoholpercentage' => 4,
            'kleur_EBC' => 27,
            'bitter_EBU' => 50,
            'biersoort' => 'IPA bier',
        ]);

        DB::table('bier')->insert([
            'naam' => 'Gulpener spicy roger',
            'merk' => 'Gulpener',
            'alcoholpercentage' => 8,
            'kleur_EBC' => 27,
            'bitter_EBU' => 50,
            'biersoort' => 'IPA bier',
        ]);
    }
}
