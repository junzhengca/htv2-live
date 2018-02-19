<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HashLetter;

class HashLetterController extends Controller
{
    public function get(Request $request, $hash){
        $letter = HashLetter::where('hash', $hash)->first();
        if($letter){
            return $letter->letter;
        } else {
            return response('not found', 404);
        }
    }
}
