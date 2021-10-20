<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Reservation;
class ReservationsController extends Controller
{
    public function AddAppointment(Request $App){
        // return $App->first_name;
        $new_appointment = new Reservation;
        $new_appointment->first_name = $App->first_name;
        $new_appointment->last_name = $App->last_name;
        $new_appointment->email = $App->email;
        $new_appointment->phone = $App->phone;
        $new_appointment->start_date = $App->start_date;
        $new_appointment->number_of_devices = $App->number_of_devices;
        $new_appointment->save();

    }
}
