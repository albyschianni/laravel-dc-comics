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

    public function personCreate (){

        return view('pages.personCreate');
    }

    public function personStore (Request $request){
        
        $data = $request -> validate([
            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'required|date',
            'height' => 'nullable|integer|min:100|max:200',
        ]);
        
        $person = new Person();

        $person -> firstName = $data['firstName'];
        $person -> lastName = $data['lastName'];
        $person -> dateOfBirth = $data['dateOfBirth'];
        $person -> height = $data['height'];
        
        $person -> save();

        return redirect()->route('home');
    }

    public function personEdit (Person $person) {

        return view('pages.personEdit', compact('person'));
    }

    public function personUpdate (Request $request, Person $person){

        $data = $request -> validate([
            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'required|date',
            'height' => 'nullable|integer|min:100|max:200',
        ]);
        
        $person -> firstName = $data['firstName'];
        $person -> lastName = $data['lastName'];
        $person -> dateOfBirth = $data['dateOfBirth'];
        $person -> height = $data['height'];
        
        $person -> save();

        return redirect()->route('home');
    }
}
