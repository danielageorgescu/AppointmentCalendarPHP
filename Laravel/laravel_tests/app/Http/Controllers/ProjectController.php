<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class ProjectController extends Controller
{
        

    public function getData(Request $request){
        $data = "This is my data";
        return view('index',['key'=>$data]);
    }


    public function showAppointments(Request $request){
        $appointment = $request->input('appointment_date')
        $appointments = Appointment::where('appointment', $appointment)->get();
        return \view('appointments',['appointment_date'=>$appointment_date]);
    }
}
