<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Narration;
use App\Http\Requests;

class HomeController extends Controller {
    public function index() {
        return view('home.index');
    }

    public function getNarration() {
        $narration = Narration::leftJoin('Segment', 'Segment.narrationId', '=', 'Narration.id')->select([ 
            'Narration.*', 'Segment.chapterId', 'Segment.segmentId', 'Segment.narrationId'
        ])->where('Segment.segmentId', '=', 1)->get();
        return response()->json($narration);
    }
}
