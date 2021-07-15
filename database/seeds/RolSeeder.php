<?php

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Models\Rol::class, 10)->create();
        DB::table('rols')->insert([
            'nombre'        => 'Profesional de Proyectos - Desarrollador',
            'created_at'    => now()
        ]);
        DB::table('rols')->insert([
            'nombre' => 'Gerente estratégico',
            'created_at'    => now()
        ]);
        DB::table('rols')->insert([
            'nombre' => 'Auxiliar administrativo',
            'created_at'    => now()
        ]);
        for ($i=0; $i < 20; $i++) { 
            DB::table('empleado_rol')->insert([
                'empleado_id'   => rand(1, 50),
                'rol_id'        => rand(1, 3),
                'created_at'    => now()
            ]);
        }
    }
}
