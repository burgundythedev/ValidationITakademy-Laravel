<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DraftsmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('draftsmen')->insert([
         
            [
                'name' => 'Todd MacFarlane',
                'nationality' => 'Canadien',
                'birth_year' => 1961,
            ],

            [
                'name' => 'Jim Lee',
                'nationality' => 'Coréé du Sud',
                'birth_year' => 1964,
            ],
            [
                'name' => 'John Romita Jr',
                'nationality' => 'Américain',
                'birth_year' => 1956,
            ],
            [
                'name' => 'Frank Miller',
                'nationality' => 'Américain',
                'birth_year' => 1957,
            ],
         
       


        ]);
    }
}
