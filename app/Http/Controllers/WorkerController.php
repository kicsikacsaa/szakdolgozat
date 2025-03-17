<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WorkerController extends Controller
{
    public function createForm()
    {
        return view("workers.create");
    }

    public function store(Request $request)
    {
        $user = Worker::create([
            "email" => $request->get("email"),
            "name" => $request->get("name"),
            "password" => Hash::make($request->get("password"))
        ]);
        return redirect()->route("workers.list");
    }

    public function list()
    {
        $workers = Worker::query()->get();
        return view("workers.list", ["workers" => $workers]);
    }

    public function updateForm(Worker $worker)
    {
        return view("workers.update", ["worker" => $worker]);
    }

    public function update(Worker $worker, Request $request)
    {
        $worker->update([
            "email" => $request->get("email"),
            "name" => $request->get("name"),
            "password" => $request->get("password") ? $worker->password : Hash::make($request->get("password"))
        ]);
        return redirect()->route("users.list");
    }

    public function delete(Worker $worker)
    {
        $worker->delete();
        return redirect()->route("workers.list");
    }
}
