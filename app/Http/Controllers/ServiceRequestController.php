<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use App\Models\ServiceList;
use App\Models\Mechanics;
use App\Http\Controllers\LogoutController;
use Illuminate\Http\Response;

class ServiceRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ServiceList::all();
        return view('/servicelist', compact('data'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $servreq = new ServiceRequest;
        $servreq->Name = $request->sname;
        $servreq->Contact = $request->scontact;
        $servreq->Email = $request->semail;
        $servreq->Address = $request->saddress;
        $servreq->VehicleName = $request->svehiclename;
        $servreq->Model = $request->smodel;
        $servreq->ServiceType = json_encode($request->ServiceType);
        $servreq->type = $request->servtype;
        $servreq->save();
        return redirect()->back()->with('message', 'Your Request Sent Successfully');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        
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
        $servreq = ServiceRequest::find($id);
        return view('admin.sedit', ['servreq'=>$servreq]);
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
        $servreq =  ServiceRequest::find($id);
        $servreq->Name = $request->sname;
        $servreq->Contact = $request->scontact;
        $servreq->Email = $request->semail;
        $servreq->Address = $request->saddress;
        $servreq->VehicleName = $request->svehiclename;
        $servreq->RegNo = $request->sregnum;
        $servreq->Model = $request->smodel;
        $servreq->type = $request->servtype;
        $servreq->save();
        return redirect()->back()->with('message', 'Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceRequest::destroy($id);
        return redirect()->back()->with('message', 'Deleted Successfully');
    }
}
