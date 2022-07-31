<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'))->with(['panel_title'=>'Users List']);
    }
    
    public function create()
    {
        return view('admin.users.create')->with(['panel_title'=>'New User']);
    }

    public function store(UserRequest $userRequest)
    {

       
        $user_data=[

            'full_name'=>request()->input('full_name'),
            'email'=>request()->input('email'),
            'password'=>request()->input('password'),
            'role'=>request()->input('role'),
            'wallet'=>request()->input('wallet'),

        ];

        $new_user_object = User::create($user_data);
        if($new_user_object instanceof User){
            return redirect()->route('admin.users.list')->with('success',true);
        }
    }
}
