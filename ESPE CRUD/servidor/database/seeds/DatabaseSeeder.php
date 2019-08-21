<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                'descripcion' => "Cliente",
            ]
        );
        DB::table('roles')->insert(
            [
                'descripcion' => "Empleado",
            ]
        );
        DB::table('roles')->insert(
            [
                'descripcion' => "Admin",
            ]
        );
    }
}
