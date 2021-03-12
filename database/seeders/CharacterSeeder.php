<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
        
            [
                'name' => 'Spawn',
                'comic_related' => 'Spawn',
                'creation_year' => 1992,
                'draftsman_id' => 1,
            ],

            [
                'name' => 'Wonder Woman',
                'comic_related' => 'Wonder Woman 1984 ',
                'creation_year' => 2021,
                'draftsman_id' => 2,
            ],
            
            [
                'name' => 'Kick-Ass',
                'comic_related' => 'Kick-Ass',
                'creation_year' => 2010,
                'draftsman_id' => 3,
            ],

            [
                'name' => 'Batman',
                'comic_related' => 'Batman : The Dark Knight Returns',
                'creation_year' => 1986,
                'draftsman_id' => 4,
            ],
            [
                'name' => 'Marv',
                'comic_related' => 'Sin City, tome 1',
                'creation_year' => 1994,
                'draftsman_id' => 4,
            ],


        ]);
    }
}
