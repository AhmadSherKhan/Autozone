<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.users' , compact('users'));
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.useredit', ['users'=>$users]);
    }
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->username;
        $users->email = $request->useremail;
        $users->isAdmin = $request->userrole;
        $users->save();
        return redirect()->back()->with('message', 'Edit Successfully');
    }
}
