<?php

namespace App\Http\Controllers;

use App\Models\Usermaster;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class UsermasterController extends Controller
{
    public function form()
    {
        $user = new Usermaster;
        $url = url('/user');
        $title = 'Register User';
        $data = compact('url', 'title', 'user');
        return view('user')->with($data);
    }
    public function register(Request $request)
    {
        $user = new Usermaster;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->gender = $request['gender'];
        $user->address = $request['address'];
        $user->country = $request['country'];
        $user->state = $request['state'];
        $user->dob = $request['dob'];
        $user->password = md5($request['password']);
        $user->save();
        return redirect('/user/display');
    }
    public function display(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $user = Usermaster::where('name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();
        } else {
            $user = Usermaster::paginate(15);
        }
        $data = compact('search', 'user');
        return view('user-view')->with($data);
    }
    public function delete($id)
    {
        $user = Usermaster::find($id);
        if (!is_null($user)) {
            $user->delete();
        }
        return redirect('/user/display');
    }
    public function trash()
    {
        $user = Usermaster::onlyTrashed()->get();
        $data = compact('user');
        return view('user-trash')->with($data);
    }

    public function restore($id)
    {
        $user = Usermaster::withTrashed()->find($id);
        if (!is_null($user)) {
            $user->restore();
        }
        return redirect('/user/trash');
    }
    public function forceDelete($id)
    {
        $user = Usermaster::withTrashed()->find($id);
        if (!is_null($user)) {
            $user->forceDelete();
        }
        return redirect('/user/trash');
    }
    public function edit($id)
    {
        $user = Usermaster::find($id);
        if (is_null($user)) {
            return redirect('user');
        } else {
            $url = url('/user/update') . "/" . $id;
            $title = 'Edit User';
            $data = compact('url', 'title', 'user');
        }
        return view('user')->with($data);
    }
    public function update($id, Request $request)
    {
        $user = Usermaster::find($id);
        if (is_null($user)) {
            return redirect('user');
        } else {
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->gender = $request['gender'];
            $user->address = $request['address'];
            $user->state = $request['state'];
            $user->country = $request['country'];
            $user->dob = $request['dob'];
            $user->save();
            return redirect('/user/display');
        }
    }
}
