<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanics;

class MechanicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mechanics = Mechanics::all();
        return view('admin.mechanics', compact('mechanics'));
    }
    public function addmechanic(){
        return view('admin.addmechanics');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = new Mechanics;
        $data->name = $request->name;
        $data->contact = $request->contact;
        $data->email = $request->email;
        $data->status = $request->status;
        $data->save();
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $mechanic = Mechanics::find($id);
        return view('admin.editmechanics', compact('mechanic'));
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
        $mechanic =  Mechanics::find($id);
        $mechanic->name = $request->name;
        $mechanic->contact = $request->contact;
        $mechanic->email = $request->email;
        $mechanic->status = $request->status;
        $mechanic->save();
        return redirect()->back()->with('message','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mechanics::destroy($id);
        return redirect()->back(); 
    }
}
