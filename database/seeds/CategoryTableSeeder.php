<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(array(
        	//this first entry is a default case for transactions that don't have where to go.
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'FINVAT',
	       'category' => 'Default',
	       'sub_category' => 'Default',
	    ),

	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'MAILCHIMP',
	       'category' => 'Marketing',
	       'sub_category' => 'Mailing',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'LINKEDIN',
	       'category' => 'Reclutamiento',
	       'sub_category' => 'Linkedin',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'Snap',
	       'category' => 'Marketing',
	       'sub_category' => 'Snapchat',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'Amazon',
	       'category' => 'Amazon',
	       'sub_category' => '',

	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'ANGELLIST',
	       'category' => 'Recruiting',
	       'sub_category' => 'Linkedin',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'ITUNES',
	       'category' => 'Apple',
	       'sub_category' => '',

	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'ITUNES',
	       'category' => 'Apple',
	       'sub_category' => 'Snapchat',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'APPLE',
	       'category' => 'Apple',
	       'sub_category' => 'Snapchat',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'COMISIÓN',
	       'category' => 'Gastos bancarios',
	       'sub_category' => 'Comisiones',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'REINTEGRO CAJERO',
	       'category' => 'Cash Disposal',
	       	'sub_category' => '',

	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'EL CORTE INGLES',
	       'category' => 'El Corte Inglés',
	       'sub_category' => '',

	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'FACEBK',
	       'category' => 'Marketing',
	       'sub_category' => 'Facebook',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'INSTAPAGE',
	       'category' => 'Marketing',
	       'sub_category' => 'Instagram',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'SEGUROS GENERALI',
	       'category' => 'Seguros',
	       'sub_category' => 'Generali',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'SEGUROS AXA',
	       'category' => 'Seguros',
	       'sub_category' => 'Axa',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'SEGUROS SANTA LUCIA',
	       'category' => 'Seguros',
	       'sub_category' => 'Santa Lucia',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'SEGUROS MAPFRE',
	       'category' => 'Seguros',
	       'sub_category' => 'Mapfre',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'MUTUA MADRILEÑA',
	       'category' => 'Seguros',
	       'sub_category' => 'Mutua Madrileña',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'OFFICENTER',
	       'category' => 'Material y Gastos de Oficina',
	       'sub_category' => 'Officenter',
	    ),
	    array(
	       'type' => 'EXPENSE',
	       'key_word' => 'IKEA',
	       'category' => 'Equipamiento',
	       'sub_category' => 'Ikea',
	    ),
	    // ENDED AT LINE NUMBER 20 IN THE SPREAD SHEETS
	    // array(
	    //    'type' => 'EXPENSE',
	    //    'key_word' => 'INSTAPAGE',
	    //    'category' => 'Marketing',
	    //    'sub_category' => 'Instagram',
	    // ),
	    // array(
	    //    'type' => 'EXPENSE',
	    //    'key_word' => 'INSTAPAGE',
	    //    'category' => 'Marketing',
	    //    'sub_category' => 'Instagram',
	    // ),

   ));
    }
}











