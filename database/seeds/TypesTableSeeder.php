<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['name' => 'Hiking Club',   'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'Choir',         'created_at' => new DateTime(), 'updated_at' => new DateTime()],
            ['name' => 'Reading Group', 'created_at' => new DateTime(), 'updated_at' => new DateTime()]
        ]);
    }
}
