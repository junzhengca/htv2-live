<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Get all events
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function getAll(Request $request){
        return response(Event::orderBy('start_time', 'DESC')->get(), 200);
    }

    /**
     * Create a new event
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'meta' => 'required',
            'tags' => 'required'
        ]);

        // Catch and return error if failed to validate
        if($validator->fails()){
            return response([
                'status' => 'bad request'
            ], 400);
        }

        $event = new Event();
        $event->fill($request->all());
        $event->meta = $request->input('meta');
        $event->start_time = new Carbon($request->input('start_time'), env('TIMEZONE'));
        $event->end_time = new Carbon($request->input('end_time'), env('TIMEZONE'));
        $event->save();
        return response($event, 201);
    }
}
