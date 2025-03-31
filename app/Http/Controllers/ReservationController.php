<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function list()
    {
        $reservations = Reservation::query()->get();
        return view("reservations.list", ["reservations" => $reservations]);
    }
    
    public function createForm()
    {
        return view("reservations.create");
    }

    public function updateForm(Reservation $reservation)
    {
        return view("reservations.update", ["reservation" => $reservation]);
    }

    public function create(Request $request)
    {
        $reservation = Reservation::create($request->except("_token"));

        return redirect()->route("reservations.list");
    }

    public function update(Reservation $reservation, Request $request)
    {
        $reservation->update($request->except("_token"));

        return redirect()->route("reservations.list");
    }

    public function delete(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route("reservations.list");
    }
}
