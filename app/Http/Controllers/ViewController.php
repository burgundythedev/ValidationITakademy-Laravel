<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Draftsman;


class ViewController extends Controller
{
    public function slash () {
        return view('home');
    }

    public function home () {
        return view('home');
    }

    
    
    public function character () {

        $character = Character::all(); 
        return view('character',['heroes' => $character]);
    }
        public function addCharacter () {
            return view('addCharacter');
        }
    
        public function characterDetails($id) {
            $character = Character::getDetails($id);
            return view('characterDetails', ['heroes'=> $character]);  
        }

        public function updateCharacter($id) {
            $character = Character::getDetails($id);
            return view('updateCharacter', ['heroes'=> $character]);

        }

        public function delete ($id) {
            $character = Character::getDetails($id);
            return view('delete', ['heroes'=> $character]);

        }

    public function draftsman () {
        return view('draftsman');
    }
}

