<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceList;

class ServiceListController extends Controller
{
    public function servlist(){
        $lists = ServiceList::all();
        return view('admin.serviceavail', ['lists'=>$lists]);
    }
    public function addservice(){
        return view('admin.addservice');
    }

    // methods for add,edit and delete new service
    public function upload(Request $request){

        $data = new ServiceList;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('serviceimage', $imagename);

        $data->image=$imagename;


        $data->servicename=$request->servicename;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back()->with('message', 'Service Added Successfully');
    }
    public function edit($id)
    {
        $service = ServiceList::find($id);
        return view('admin.serviceditform', ['service'=>$service]);
    }
    public function update(Request $request, $id)
    {
        $service =  ServiceList::find($id);
        $service->servicename = $request->servicename;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->image = $request->image;
        $service->save();
        return redirect()->back()->with('message', 'Service Edit Successfully');
    }
    public function destroy($id)
    {
        ServiceList::destroy($id);
        return redirect()->back();
    }
   
}
 