<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function list()
    {
        $tables = Table::query()->get();
        return view("tables.list", ["tables" => $tables]);
    }
    
    public function createForm()
    {
        return view("tables.create");
    }

    public function updateForm(Table $table)
    {
        return view("tables.update", ["table" => $table]);
    }

    public function store(Request $request)
    {
        $table = Table::firstOrNew(["id" => $request->get("id")]);
        $table->fill($request->except(["id", "_token"]));
        $table->save();

        return redirect()->route("tables.list");
    }

    public function delete(Table $table)
    {
        $table->delete();
        return redirect()->route("tables.list");
    }
}
