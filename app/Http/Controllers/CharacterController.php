<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public static function update (Request $request){
        $character = Character::find($request->id); 
        $character->name = $request->name;
        $character->draftsman = $request->draftsman;
        $character->comic_related = $request->comic_related;
        $character->creation_year = $request->creation_year;
        $character->save();
        return redirect('character');
    }

    public static function delete (Request $request){
        // dd($request);
        Character::destroy($request->id);
        return redirect('/character');
    }
}
