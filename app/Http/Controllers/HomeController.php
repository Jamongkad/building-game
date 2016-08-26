<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Narration;
use App\Response;
use App\Http\Requests;

class HomeController extends Controller {
    public function index() {
        return view('home.index');
    }

    public function getNarration($segment = 1) {
        $narrations = Narration::leftJoin('Segment', 'Segment.narrationId', '=', 'Narration.id')->select([ 
            'Narration.*', 'Segment.chapterId', 'Segment.segmentId', 'Segment.narrationId'
        ])->where('Segment.segmentId', '=', $segment)->get();

        $result = [];
        foreach($narrations as $narration) {
            $narration->gameObject = "text";
            $result[] = $narration;
        }

        return response()->json($result);
    }

    public function getResponses($segment) {
        $responses = Response::join('SegmentResponse', 'SegmentResponse.responseId', '=', 'Response.id')
                              ->where('SegmentResponse.segmentId', '=', $segment)->get();


        $result = [];
        foreach($responses as $response) {
            $response->gameObject = "controls";
            $result[] = $response;
        }
        return response()->json($result);
    }
}
