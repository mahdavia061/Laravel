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
        return view('admin.users.index')->with(['panel_title'=>'Users List']);
    }
    
    public function create()
    {
        return view('admin.users.create')->with(['panel_title'=>'New User']);
    }

    public function store(UserRequest $userRequest)
    {

        // $this->validate(request(),[
        //     'full_name' => 'required',
        //     'email'     => 'required|email',
        //     'password'  => 'required|min:6|max:12',

        // ],[
        //     'full_name.required'=>'Please enter your fullname.',
        //     'email.required'=>'Email is required.',
        //     'email.email'=>'The email entered is not valid.',
        //     'password.required'=>'Password is required.',
        //     'password.min'=>'The password must be at least 6 characters long.',
        //     'password.max'=>'The password must be at most 12 characters.',
        // ]);

        $user_data=[

            'name'=>request()->input('full_name'),
            'email'=>request()->input('email'),
            'password'=>request()->input('password'),
            'role'=>request()->input('role'),
            'wallet'=>request()->input('wallet'),

        ];

        $new_user_object = User::create($user_data);
    }
}
