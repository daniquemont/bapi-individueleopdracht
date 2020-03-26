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
            'biersoort' => 'Pils',
            'foto' => 'https://lh3.googleusercontent.com/proxy/onHdKU7xzq8K0dD0q0uIa9Fgq26Ujcf1ugpZjDzFd-7aVZsF8hB-Qw_C7jbh9ufTONoEk0lOB8nmxCzVnlR4WUs-TaJKDlX4bvyB6UlbAwx21nlfw-ffpvTSzFjscIQU0x9R']);

        DB::table('bier')->insert([
            'naam' => 'Hoegaarden Wit',
            'merk' => 'Hoegaarden',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 6,
            'bitter_EBU' => 12,
            'biersoort' => 'Witbier',
            'foto' => 'https://www.dirckiii.nl/media/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/6/2/6252fa252f5252f2252f6a526976aa0dadbed78ed51e95412f9107d93681_5412421306015.png']);
        
        DB::table('bier')->insert([
            'naam' => 'Hertog Jan',
            'merk' => 'Hertog Jan',
            'alcoholpercentage' => 5 ,
            'kleur_EBC' => 9,
            'bitter_EBU' => 24 ,
            'biersoort' => 'Pils',
            'foto' => 'https://www.plus.nl/INTERSHOP/static/WFS/PLUS-Site/-/PLUS/nl_NL/product/L/357832.png']);

                
        DB::table('bier')->insert([
            'naam' => 'Heineken',
            'merk' => 'Heineken',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 9,
            'bitter_EBU' => 24,
            'biersoort' => 'Pils',
            'foto' => 'https://drinkdelivery.nl/wp-content/uploads/2016/07/Heineken-Pilsener-fles-50cl.png']);

                
        DB::table('bier')->insert([
            'naam' => 'Amstel',
            'merk' => 'Amstel',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 9,
            'bitter_EBU' => 24,
            'biersoort' => 'Pils',
            'foto' => 'https://www.horecagoedkoop.nl/media/catalog/product/cache/e4a8a25e137031f6c0724e1309e7aef3/a/m/amstel-fles.png']);

                
        DB::table('bier')->insert([
            'naam' => 'Bavaria',
            'merk' => 'Bavaria',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 9,
            'bitter_EBU' => 24,
            'biersoort' => 'Pils',
            'foto' => 'https://ish-images-static.prod.cloud.jumbo.com/product_images/131120190449_262255KRT-4_720x720.png']);

                
        DB::table('bier')->insert([
            'naam' => 'Vedett Extra White',
            'merk' => 'Vedett',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 6,
            'bitter_EBU' => 16,
            'biersoort' => 'Witbier',
            'foto' => 'https://www.bierfamilie.nl/wp-content/uploads/2019/06/Vedett-Extra-White.png']);

                
        DB::table('bier')->insert([
            'naam' => 'Gulpener Korenwolf Wit',
            'merk' => 'Gulpener',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 6,
            'bitter_EBU' => 16,
            'biersoort' => 'Witbier',
            'foto' => 'https://www.beerwulf.com/globalassets/gulpener_korenwolf_tijdelijk.png']);

                
        DB::table('bier')->insert([
            'naam' => 'ST. Bernardus wit',
            'merk' => 'ST. Bernardus',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 6,
            'bitter_EBU' => 16,
            'biersoort' => 'Witbier',
            'foto' => 'https://www.bierfamilie.nl/wp-content/uploads/1970/01/st-bernardus-wit.png']);

        DB::table('bier')->insert([
            'naam' => 'Grolsch Lentebok',
            'merk' => 'Grolsch',
            'alcoholpercentage' => 7,
            'kleur_EBC' => 75,
            'bitter_EBU' => 25,
            'biersoort' => 'Bokbier',
            'foto' => 'https://www.bierfamilie.nl/wp-content/uploads/2019/07/grolsch-lentebok.png']);

        DB::table('bier')->insert([
            'naam' => 'Brand lentebock',
            'merk' => 'Brand',
            'alcoholpercentage' => 7,
            'kleur_EBC' => 75,
            'bitter_EBU' => 25,
            'biersoort' => 'Bokbier',
            'foto' => 'https://www.bierfamilie.nl/wp-content/uploads/2018/04/brand-lentebock.png']);

        DB::table('bier')->insert([
            'naam' => 'Hertog Jan lentebock',
            'merk' => 'Hertog Jan',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 75,
            'bitter_EBU' => 25,
            'biersoort' => 'Bokbier',
            'foto' => 'https://res.cloudinary.com/bierista/image/upload/c_fit,h_400/v1563203019/hertog-jan-lentebock']);

        DB::table('bier')->insert([
            'naam' => 'Christoffel Bock',
            'merk' => 'Christoffel',
            'alcoholpercentage' => 8,
            'kleur_EBC' => 75,
            'bitter_EBU' => 25,
            'biersoort' => 'Bokbier',
            'foto' => 'https://www.christoffelbieren.com/wp-content/uploads/2013/06/sperciaal-bier-christoffel-bieren-bock-01.png']);


        DB::table('bier')->insert([
            'naam' => 'Liefmans Fruitesse',
            'merk' => 'Liefmans',
            'alcoholpercentage' => 4,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Lambiek bier',
            'foto' => 'https://www.bierfamilie.nl/wp-content/uploads/2017/01/Liefmans-Fruitesse.png']);

        DB::table('bier')->insert([
            'naam' => 'Wittekerke Rosé',
            'merk' => 'Wittekerke',
            'alcoholpercentage' => 4,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Lambiek bier',
            'foto' => 'https://www.vanderfeestenbieren.nl/media/catalog/product/cache/4/image/9df78eab33525d08d6e5fb8d27136e95/w/i/wittekerke_rose_2.png']);

        DB::table('bier')->insert([
            'naam' => 'Timmermans Kriek',
            'merk' => 'Timmermans',
            'alcoholpercentage' => 4,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Lambiek bier',
            'foto' => 'https://static.ah.nl/static/gall/img_26048_Gall_500.png']);

        DB::table('bier')->insert([
            'naam' => 'Boon Kriek',
            'merk' => 'Kriek Boon',
            'alcoholpercentage' => 4,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Lambiek bier',
            'foto' => 'https://www.totalwine.com/dynamic/x490,sq/media/sys_master/twmmedia/h58/h4a/10140739436574.png']);

        DB::table('bier')->insert([
            'naam' => 'Amstel radler',
            'merk' => 'Amstel',
            'alcoholpercentage' => 2,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Lambiek bier',
            'foto' => 'https://pngimage.net/wp-content/uploads/2018/05/amstel-radler-png-3.png']);

        DB::table('bier')->insert([
            'naam' => 'Vintage Geuze',
            'merk' => 'Geuze',
            'alcoholpercentage' => 7,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Geuze bier',
            'foto' => 'https://www.beermerchants.com/media/catalog/product/cache/1/image/x400/17f82f742ffe127f42dca9de82fb58b1/b/e/bellevue_selection_1999.png']);

        DB::table('bier')->insert([
            'naam' => 'Geuze mariage parfait',
            'merk' => 'Geuze',
            'alcoholpercentage' => 8,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Geuze bier',
            'foto' => 'https://img.saveur-biere.com/img/p/4364-49174-v4_product_img.jpg']);

        DB::table('bier')->insert([
            'naam' => 'Watergeus brut olasz',
            'merk' => 'Geuze',
            'alcoholpercentage' => 8,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Geuze bier',
            'foto' => 'https://brouwerijvandenbroek.com/wp-content/uploads/2018/02/watergeus_180225.png']);


        DB::table('bier')->insert([
            'naam' => 'Oude geuze',
            'merk' => 'Geuze',
            'alcoholpercentage' => 6,
            'kleur_EBC' => 27,
            'bitter_EBU' => 16,
            'biersoort' => 'Geuze bier',
            'foto' => 'https://ish-images-static.prod.cloud.jumbo.com/product_images/150320192341_226922FLS-1_720x720.png']);


        DB::table('bier')->insert([
            'naam' => 'Brewdog Punk IPA',
            'merk' => 'Brewdog',
            'alcoholpercentage' => 6,
            'kleur_EBC' => 27,
            'bitter_EBU' => 50,
            'biersoort' => 'IPA bier',
            'foto' => 'https://www.dirckiii.nl/media/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/5/3/5369c5c366ef2cb694813d628650452fb8cef8e7_5060154910018.png']);


        DB::table('bier')->insert([
            'naam' => 'Vedett extra IPA',
            'merk' => 'Vedett',
            'alcoholpercentage' => 6,
            'kleur_EBC' => 27,
            'bitter_EBU' => 50,
            'biersoort' => 'IPA bier',
            'foto' => 'https://ish-images-static.prod.cloud.jumbo.com/product_images/080520191011_149025FLS-1_720x720.png']);


        DB::table('bier')->insert([
            'naam' => 'Flying dog easy IPA',
            'merk' => 'Flying dog',
            'alcoholpercentage' => 5,
            'kleur_EBC' => 27,
            'bitter_EBU' => 50,
            'biersoort' => 'IPA bier',
            'foto' => 'https://catalogue.vandb.fr/115-large_default/flying-dog-easy-ipa-355-cl-nc.jpg']);



        DB::table('bier')->insert([
            'naam' => 'Brewdog dead pony club',
            'merk' => 'Brewdog',
            'alcoholpercentage' => 4,
            'kleur_EBC' => 27,
            'bitter_EBU' => 50,
            'biersoort' => 'IPA bier',
            'foto' => 'https://www.pngkey.com/png/full/853-8535995_brewdog-dead-pony-club-330ml-bottle-dead-pony.png']);


        DB::table('bier')->insert([
            'naam' => 'Gulpener spicy roger',
            'merk' => 'Gulpener',
            'alcoholpercentage' => 8,
            'kleur_EBC' => 27,
            'bitter_EBU' => 50,
            'biersoort' => 'IPA bier',
            'foto' => 'https://www.dirckiii.nl/media/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/3/9/39f8ebe3eddaef2b39737595782cd59254f83505_8725500930559_Gulpener_Spicy_Roger.png']);

    }
}
