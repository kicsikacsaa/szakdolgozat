<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function list()
    {
        $users = User::query()->get();
        return view("users.list", ["users" => $users]);
    }
    
    public function createForm()
    {
        return view("users.create");
    }

    public function updateForm(User $user)
    {
        return view("users.update", ["user" => $user]);
    }

    public function create(Request $request)
    {
        $user = User::create($request->except("_token"));

        return redirect()->route("users.list");
    }

    public function update(User $user, Request $request)
    {
        $user->update($request->except("_token"));

        return redirect()->route("users.list");
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route("users.list");
    }
}