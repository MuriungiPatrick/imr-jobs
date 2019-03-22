<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([

                array(
                    'id' => 1,
                    'name' => 'Admin',
                    'updated_at'=>now(),
                    'created_at'=>now(),
                ),
                array(
                    'id' => 2,
                    'name' => 'Staff',
                    'updated_at'=>now(),
                    'created_at'=>now(),
                ),
                array(
                    'id' => 3,
                    'name' => 'User',
                    'updated_at'=>now(),
                    'created_at'=>now(),
                )

        ]);

    }
}


