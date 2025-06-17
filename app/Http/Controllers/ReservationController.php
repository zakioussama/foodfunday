<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ReservationController extends Controller
{
   
        public function index()
    {
        $reservations = Reservation::latest()->paginate(10);
        return view('admin.reservations.index', compact('reservations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'form_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'no_of_persons' => 'required|integer|min:1',
            'date' => 'required|date',
            'time' => 'required|string',
            'preferred_food' => 'required|string',
            'occasion' => 'required|string',
        ]);
    
        // Convert the date from 'DD.MM.YYYY' to 'Y-m-d'
        $date = Carbon::createFromFormat('d.m.Y', $request->date)->format('Y-m-d');
    
        // Create the reservation and store it in the database
        Reservation::create([
            'form_name' => $request->form_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'no_of_persons' => $request->no_of_persons,
            'date' => $date,  // Store the formatted date
            'time' => $request->time,
            'preferred_food' => $request->preferred_food,
            'occasion' => $request->occasion,
        ]);
    
        return back()->with('success', 'Your reservation has been submitted!');
    }
    
        public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        return redirect()->back()->with('success', 'Reservation deleted.');
    }

}
