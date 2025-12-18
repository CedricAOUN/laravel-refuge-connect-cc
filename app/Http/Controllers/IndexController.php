<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $animals = Animal::orderBy('name')->take(3)->get();
        return view('welcome', [
            'animals' => $animals,
        ]);
    }
}
