<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'date'      => 'required|date',
            'time_slot' => 'required',
            'table'     => 'required',
        ]);

        $member_id = session('member_id');
        if (!$member_id) return redirect()->route('login');

        Reservation::create([
            'member_id'        => $member_id,
            'reservation_date' => $request->date,
            'time_slot'        => $request->time_slot,
            'table_name'       => $request->table,
        ]);

        return redirect()->route('thankyou')
            ->with(['date' => $request->date, 'time' => $request->time_slot, 'table' => $request->table, 'email' => session('email')]);
    }
}