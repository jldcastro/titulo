<?php

use Illuminate\Database\Seeder;


class AdministradorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'codigo_usuario'=>'16285258',
            'name' => 'Admin',
            'email' => 'admin@molinstec.cl',
            'password' => bcrypt('admin123'),
            'apellido_paterno' => 'molinstec',
            'apellido_materno' => 'molinstec',
            'tipo_usuario' => 'administrador',
            'rut_usuario' => '16285258-2'
        ]);
    }
}
