<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Draftsman;

class DraftsmanController extends Controller
{
    public function draftsman(){

        return $this->hasMany(Character::class);
    
    }
}
