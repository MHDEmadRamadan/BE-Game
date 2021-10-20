<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;

class ReservationsController extends Controller
{
    // for dashboard table-datatable page
    public function browse()
    {
        $res = Reservation::all();
        return view('dashboard.reservations-table', compact('res'));
    }
    // for delete reservation
    public function delete($id_del)
    {
        $del_res = Reservation::where('Reservation_id', $id_del);
        // $ress="select * from Reservation where Reservation_id=id_del ;";
        $del_res->delete();
        return back();
    }
}
