<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Http\Requests;

class datauserController extends Controller
{
    public function index()
    {
    	$datausers = user::all();
    	return view('datauser.index',compact('datausers'));
    }

    public function create()
    {
    	return view('datauser.create');
    }

    public function store(Request $request)
    {
        
    	$user = new user();
    	$user->name = $request->name;
    	$user->email = $request->email;
        $user->password = bcrypt($request['password']);
    	$user->save();

    	return redirect('datauser');
    }
    public function update(Request $request, $id)
    {
        $user = user::find($id);
        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->password = bcrypt($request['password']);
        $user ->save();

        return redirect('datauser');
    }

    public function delete($id)
    {
     
        $user = user::find($id);
        $user->delete();

        return redirect('datauser');
    }

    public function detail($id)
    {
        $user = user::find($id);
        if(!$user)
            abort('404');

        return view('datauser.edit', compact('user'));
    }

    public function edit($id)
    {
       $user = user::find($id);
        if(!$user)
            abort('404');

        return view('datauser.edit', compact('user'));
    }
}
