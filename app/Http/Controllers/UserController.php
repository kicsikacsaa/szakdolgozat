<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function createForm()
    {
        return view("users.create");
    }

    public function store(Request $request)
    {
        $user = User::create([
            "email" => $request->get("email"),
            "name" => $request->get("name"),
            "password" => Hash::make($request->get("password"))
        ]);
        return redirect()->route("users.list");
    }

    public function list()
    {
        $users = User::query()->get();
        return view("users.list", ["users" => $users]);
    }

    public function updateForm(User $user)
    {
        return view("users.update", ["user" => $user]);
    }

    public function update(User $user, Request $request)
    {
        $user->update([
            "email" => $request->get("email"),
            "name" => $request->get("name"),
            "password" => $request->get("password") ? $user->password : Hash::make($request->get("password"))
        ]);
        return redirect()->route("users.list");
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route("users.list");
    }
}