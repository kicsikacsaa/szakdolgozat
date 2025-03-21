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

    public function store(Request $request)
    {
        $user = User::firstOrNew(["id" => $request->get("id")]);
        $user->fill($request->except(["id", "_token"]));
        $user->save();

        return redirect()->route("users.list");
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route("users.list");
    }
}