<?php

use Illuminate\Database\Seeder;

class TableRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
        'administrador',
        'editor',
        'supervisor'
        ];
        foreach($rols as $key => $value){
            DB::table('rol')->insert([
                'nombre' => $value
            ]);
        }
    }
}
