<?php

namespace App\Http\Controllers;

use App\Models\Pets;
use Illuminate\Http\Request;


class PetsController extends Controller
{
    public function index(){

        $pets = Pets::all();
        return view('pets.index', compact('pets'));
    }

    public function create(){
        return view('pets.create');
    }

    public function store(Request $request){
        Pets::create($request->all());
        return redirect()->route('index');
    }
}
