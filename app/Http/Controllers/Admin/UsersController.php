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
        return view('admin.users.index', compact('users'))->with(['panel_title' => 'Users List']);
    }

    public function create()
    {
        return view('admin.users.create')->with(['panel_title' => 'New User']);
    }

    public function store(UserRequest $userRequest)
    {


        $user_data = [

            'full_name' => request()->input('full_name'),
            'email' => request()->input('email'),
            'password' => request()->input('password'),
            'role' => request()->input('role'),
            'wallet' => request()->input('wallet'),

        ];

        $new_user_object = User::create($user_data);
        if ($new_user_object instanceof User) {
            return redirect()->route('admin.users.list')->with('success', 'New User Creating Was Successfull.');
        }
    }


    public function delete($user_id)
    {
        if ($user_id && ctype_digit($user_id)) {
            $userItem = User::find($user_id);

            if ($userItem && $userItem instanceof User) {
                $userItem->delete();

                return redirect()->route('admin.users.list')->with('success', 'User successfully deleted.');
            }
        }
    }


    public function edit($user_id)
    {
        if ($user_id && ctype_digit($user_id)) {
            $userItem = User::find($user_id);

            if ($userItem && $userItem instanceof User) {

                return view('admin.users.edit', compact('userItem'))->with(['panel_title' => 'Edit User']);

            }
        }
    }

    public function update(UserRequest $userRequest, $user_id)
    {
        $inputs = request()->except('_token');
        if (!request()->has('password')) {
            unset($inputs['password']);
        }

        $userItem = User::find($user_id);
        $userItem->update($inputs);
        return redirect()->route('admin.users.list')->with('success', 'User successfuly Edited.');
    }
}
