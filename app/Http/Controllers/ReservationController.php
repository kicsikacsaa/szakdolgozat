<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function createForm()
    {
        return view("reservations.create");
    }

    public function store(Request $request)
    {
        $reservation = Reservation::create([
            "date" => $request->get("date"),
            "time" => $request->get("time"),
            "guests" => $request->get("guests"),
        ]);
        return redirect()->route("reservations.list");
    }

    public function list()
    {
        $reservations = Reservation::query()->get();
        return view("reservations.list", ["reservations" => $reservations]);
    }

    public function updateForm(Reservation $reservation)
    {
        return view("reservations.update", ["reservation" => $reservation]);
    }

    public function update(Reservation $reservation, Request $request)
    {
        $reservation->update([
            "date" => $request->get("email"),
            "time" => $request->get("name"),
            "guests" => $request->get("guests"),
        ]);
        return redirect()->route("reservations.list");
    }

    public function delete(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route("reservations.list");
    }
}
