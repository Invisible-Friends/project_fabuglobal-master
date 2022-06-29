<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Appointment;
class AppointmentController extends Controller
{
    public function appointment()
    {
        //  $appointments = appointment::all();
        return view('appointment');//, compact('appointments'));
    }

    
}
