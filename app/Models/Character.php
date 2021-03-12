<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public static function getDetails($id) {
            return Character::find($id);
    }


    public function draftMan() {
        return $this->belongsTo(Draftsman::class);
    }


    //retrouve l'id et return son nom
    public function findDrafts(){
        $draftsman= Draftsman::find($id);
        return $draftsman->post->name;

    }

   
}
