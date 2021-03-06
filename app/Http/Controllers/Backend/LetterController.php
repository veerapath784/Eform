<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use App\Letter;


class LetterController extends Controller
{    protected $rules = [
    'address' => 'required',
    'phone' => 'required',
    'at' => 'required',
    'date' => 'required',
    'subject' => 'required',
    'deteil' => 'required',
    'study' => 'required',
    'sign' => 'required',
];
protected $path = "/backend/letter";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.letter.index', [
            'letters' => Letter::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.letter.create');
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
        $letter = new Letter();
        $letter->address = $request->input('address');
        $letter->phone = $request->input('phone');
        $letter->at = $request->input('at');
        $letter->date = $request->input('date');
        $letter->subject = $request->input('subject');
        $letter->deteil = $request->input('deteil');
        $letter->ending = $request->input('ending');
        $letter->study  = $request->input('study');
        $letter->sign = $request->input('sign');
        $letter->position = $request->input('position');
        $letter       ->save();

        return redirect($this->path);
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
     *
     */

    public function printing($id)
    {
        $letter = Letter::find($id);
        $data = [
            'letter' => $letter
        ];
        $pdf = PDF::loadView('backend.printing_letter', $data);
        $pdf->setPaper('A4');
        return $pdf->stream();
    }



    public function edit($id)
    {
        $letter = Letter::find($id);
        $data = [
            'letter' => $letter
        ];
        return view('backend.letter.edit', $data);
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
        $letter = Letter::find($id  );
        $letter->address = $request->input('address');
        $letter->phone = $request->input('phone');
        $letter->at = $request->input('at');
        $letter->date = $request->input('date');
        $letter->subject = $request->input('subject');
        $letter->deteil = $request->input('deteil');
        $letter->ending = $request->input('ending');
        $letter->study  = $request->input('study');
        $letter->sign = $request->input('sign');
        $letter->position = $request->input('position');
        $letter       ->save();
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
        $memo = \App\Letter::find($id);
        $memo->delete();
        return response()->json();
    }
}
