<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RentRequest;
use App\Models\Categories;
use App\Http\Controllers\LogoutController;

class RentRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Categories::paginate(6);
        return view('rentacar', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $rentreq = array(
            'car_selected'=>$request->selected, 
            'price'=>$request->price, 
            'pickup_date'=>$request->date1, 
            'dropoff_date'=>$request->date2, 
            'name'=>$request->name, 
            'CNIC'=>$request->CNIC, 
            'Contact'=>$request->Contact, 
            'Email'=>$request->Email, 
            'Address'=>$request->Address, 
        );
        $id = DB::table('rent_requests')->insertGetId($rentreq);
        return redirect('rentprice/'.$id);

        // $rentreq = new RentRequest;
        // $rentreq->car_selected = $request->selected;
        // $rentreq->price = $request->price;
        // $rentreq->pickup_date = $request->date1;
        // $rentreq->dropoff_date = $request->date2;
        // $rentreq->name = $request->name;
        // $rentreq->CNIC = $request->CNIC;
        // $rentreq->Contact = $request->Contact;
        // $rentreq->Email = $request->Email;
        // $rentreq->Address = $request->Address;
        // $rentreq->save();
        // return redirect()->back();
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
        $rentreq = RentRequest::find($id);
        return view('admin.editform', ['rentreq'=>$rentreq]);
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
        $rentreq = RentRequest::find($id);
        $rentreq->name = $request->name;
        $rentreq->CNIC = $request->CNIC;
        $rentreq->Contact = $request->Contact;
        $rentreq->Email = $request->Email;
        $rentreq->Address = $request->Address;
        $rentreq->save();
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
        RentRequest::destroy($id);
        return redirect()->back(); 
    }


    // Functions for Rentcar upload, edit and delete
    public function rentcarlist(){
        $data = Categories::all();
        return view ('admin.carcategories', compact('data'));
    }
    public function addnewcar(){
        return view ('admin.addnewcar');
    }
    public function uploadnewcar(Request $request){
        $data = new Categories;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('carimage', $imagename);

        $data->image=$imagename;

        $data->carname = $request->carname;
        $data->price   = $request->price;
        $data->save();
        return redirect()->back()->with('message', 'Car Added Successfully');
    }
    public function caredit($id){
        $data = Categories::find($id);
        return view ('admin.editrentcar', compact('data'));
    }
    public function carupdate(Request $request, $id){
        $data = Categories::find($id);

        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('carimage', $imagename);

        $data->image=$imagename;
        $data->carname = $request->carname;
        $data->price = $request->price;
        $data->save();
        return redirect()->back()->with('message', 'Edit Successfully');
    }
    public function cardestroy($id)
    {
        Categories::destroy($id);
        return redirect()->back()->with('message', 'Delete Successfully'); 
    }

    public function rentform($id){
        $cars = Categories::find($id);
        return view('rentform', compact('cars'));
    }
    public function rentprice($id){

        $data = RentRequest::find($id);
        return view ('rentprice', compact('data'));
    }
    
  
}
