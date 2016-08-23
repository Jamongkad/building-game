<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Choice;
use App\Http\Requests;

class HomeController extends Controller {
    public function index() {
        return view('home.index');
    }

    public function getChoices() {
        $choices = Choice::choices()->limit(4)->get();
        return response()->json($choices);
    }

    public function getChoice($id) {
        return $id;
    }
}
