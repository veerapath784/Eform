<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use App\Minutes;

class MinutesController extends Controller
{     protected $rules = [
    'heading' => 'required',
    'meeting' => 'required',
    'attendees' => 'required',
    'nonattendee' => 'required',
    'start' => 'required',
    'end' => 'required',

];

protected $path = "/backend/minutes";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('backend.minutes.index', [
        'minutes' => Minutes::all()
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.minutes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules);
        $minutes = new Minutes();
        $minutes->heading = $request->input('heading');
        $minutes->meeting = $request->input('meeting');
        $minutes->attendees = $request->input('attendees');
        $minutes->nonattendee = $request->input('nonattendee');
        $minutes->start = $request->input('start');
        $minutes->time = $request->input('time');
        $minutes->agenda1 = $request->input('agenda1');
        $minutes->agenda2 = $request->input('agenda2');
        $minutes->agenda3  = $request->input('agenda3');
        $minutes->agenda4 = $request->input('agenda4');
        $minutes->agenda5 = $request->input('agenda5');
        $minutes->agenda6 = $request->input('agenda6');
        $minutes->end = $request->input('end');
        $minutes->sign1  = $request->input('sign1');
        $minutes->sign2 = $request->input('sign2');
        $minutes->position1 = $request->input('position1');
        $minutes->position2 = $request->input('position2');


        $minutes       ->save();
        return redirect($this->path);
    }


    public function printing($id)
    {
        $minutes = Minutes::find($id);
        $data = [
            'minutes' => $minutes
        ];
        $pdf = PDF::loadView('backend.printing_minutes', $data);
        $pdf->setPaper('A4');

        return $pdf->stream();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $minutes = Minutes::find($id);
        $data = [
            'minutes' => $minutes
        ];
        return view('backend.minutes.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->rules);
        $minutes = Minutes::find($id);
        $minutes->heading = $request->input('heading');
        $minutes->meeting = $request->input('meeting');
        $minutes->attendees = $request->input('attendees');
        $minutes->nonattendee = $request->input('nonattendee');
        $minutes->start = $request->input('start');
        $minutes->time = $request->input('time');
        $minutes->agenda1 = $request->input('agenda1');
        $minutes->agenda2 = $request->input('agenda2');
        $minutes->agenda3  = $request->input('agenda3');
        $minutes->agenda4 = $request->input('agenda4');
        $minutes->agenda5 = $request->input('agenda5');
        $minutes->agenda6 = $request->input('agenda6');
        $minutes->end = $request->input('end');
        $minutes->sign1  = $request->input('sign1');
        $minutes->sign2 = $request->input('sign2');
        $minutes->position1 = $request->input('position1');
        $minutes->position2 = $request->input('position2');
        $minutes       ->save();
        return redirect($this->path);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $minutes = \App\Minutes::find($id);
        $minutes->delete();
        return response()->json();
    }
}
