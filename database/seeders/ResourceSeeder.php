<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $arr_cat = ['clientes', 'higienes', 'parametros', 'status', 'vents'];
        $arr_pag = ['index', 'create', 'destroy', 'edit', 'show'];

        foreach ($arr_cat as $cat) {
            foreach ($arr_pag as $pag) {
                DB::table('resources')->insert([
                    'nome' => $cat . '.' . $pag,
                ]);
            }
        }
    }
}