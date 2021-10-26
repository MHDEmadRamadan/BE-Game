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

    public function AddAppointment(Request $App)
    {
        // return $App->first_name;
        $new_appointment = new Reservation();
        // $new_appointment->first_name = $App->first_name;
        // $new_appointment->last_name = $App->last_name;
        // $new_appointment->email = $App->email;
        // $new_appointment->phone = $App->phone;
        $new_appointment->Reservation_start = $App->Reservation_start;
        $new_appointment->Reservation_end = $App->Reservation_end;
        $new_appointment->number_of_devices = $App->number_of_devices;
        $new_appointment->number_of_gamepad = $App->number_of_gamepad;
        $new_appointment->save();
        return back();
    }

    // for Edite reservation
    public function EditeAppointment($id)
    {
        $res = Reservation::all();
        $Res_find = Reservation::find($id);
        return view('dashboard/form-editor', compact('res', 'Res_find'));

    
    }
}
