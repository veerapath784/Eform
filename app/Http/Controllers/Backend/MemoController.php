<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Memo;

class MemoController extends Controller
{        protected $rules = [
    'part' => 'required',
    'phone' => 'required',
    'at' => 'required',
    'date' => 'required',
    'subject' => 'required',
    'deteil' => 'required|max:5',
    'study' => 'required',
    'sign' => 'required',


];

protected $path = "/backend/memo";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.memo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.memo.create');
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
        $memo = new Memo();
        $memo->part = $request->input('part');
        $memo->phone = $request->input('phone');
        $memo->at = $request->input('at');
        $memo->date = $request->input('date');
        $memo->subject = $request->input('subject');
        $memo->deteil = $request->input('deteil');
        $memo->ending = $request->input('ending');
        $memo->study  = $request->input('study');
        $memo->sign = $request->input('sign');
        $memo       ->save();
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
     */
    public function edit($id)
    {
        $memo = Memo::find($id);
        $data = [
            'memo' => $memo
        ];
        return view('backend.memo.edit', $data);
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
        $memo = Memo::find($id);
        $memo->part = $request->input('part');
        $memo->phone = $request->input('phone');
        $memo->at = $request->input('at');
        $memo->date = $request->input('date');
        $memo->subject = $request->input('subject');
        $memo->deteil = $request->input('deteil');
        $memo->ending = $request->input('ending');
        $memo->study  = $request->input('study');
        $memo->sign = $request->input('sign');
        $memo->save();

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
        $memo = \App\Memo::find($id);
        $memo->delete();
        return response()->json();
    }
}
