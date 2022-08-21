<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Department;

class ProjectController extends Controller
{


    public function getData(Request $request){
        $data = "This is my data";
        return view('index',['key'=>$data]);
    }
 
    public function getAllDepartments(Request $request){
        $departments = Department::all();
        return view ('index',['departments' =>$departments]);
    }

    public function showAppointments(Request $request){
        $department_name = $request->input('department_name');
        $appointments = Appointment::where('department_name', $department_name)->get();
        return \view('appointments',['appointments'=>$appointments]);
    }
}
