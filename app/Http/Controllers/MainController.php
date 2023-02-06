<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

use App\Models\Person;

class MainController extends Controller
{ 
    public Function home () {

        $people = Person::all();

        return view('pages.home', compact('people'));
    }

    public function personShow (Person $person){

        
        return view('pages.personShow', compact('person'));
    }

    public function delete (Person $person) {

        $person->delete();

        return redirect()->route('home');
    }
}
