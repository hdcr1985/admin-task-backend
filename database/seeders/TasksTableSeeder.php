<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'title' => '[feature]: Iniciar proyecto',
                'created_at' => '2024-09-01 10:00:00',
                'updated_at' => Carbon::now(),
                'completed' => false,
            ],
            [
                'title' => '[feature]: Intalar libreria de Bootstrap',
                'created_at' => '2024-09-02 10:00:00',
                'updated_at' => Carbon::now(),
                'completed' => false,
            ], 
            [
                'title' => '[feature]: Intalar libreria de Font Awesome',
                'created_at' => '2024-09-03 10:00:00',
                'updated_at' => Carbon::now(),
                'completed' => false,
            ],             
            [
                'title' => '[feature]: Creacion del modulo agregar tareas',
                'created_at' => '2024-09-04 10:00:00',
                'updated_at' => Carbon::now(),
                'completed' => false,
            ],
            [
                'title' => '[feature]: Creacion del modulo agregar tareas',
                'created_at' => '2024-09-05 10:00:00',
                'updated_at' => Carbon::now(),
                'completed' => false,
            ], 
            [
                'title' => '[feature]: Creacion del modulo editar tareas',
                'created_at' => '2024-09-06 10:00:00',
                'updated_at' => Carbon::now(),
                'completed' => false,
            ],
            [
                'title' => '[feature]: Creacion del modulo eliminar tareas',
                'created_at' => '2024-09-07 10:00:00',
                'updated_at' => Carbon::now(),
                'completed' => false,
            ], 
            [
                'title' => '[feature]: Ordenar tareas por fecha',
                'created_at' => '2024-09-08 10:00:00',
                'updated_at' => Carbon::now(),
                'completed' => false,
            ],
            [
                'title' => '[feature]: Ordenar tareas por estatus',
                'created_at' => '2024-09-09 10:00:00',
                'updated_at' => Carbon::now(),
                'completed' => false,
            ], 
            [
                'title' => '[feature]: Subir al GitHub y documentar',
                'created_at' => '2024-09-10 10:00:00',
                'updated_at' => Carbon::now(),
                'completed' => false,
            ]                                                             
        ]);
    }
}
