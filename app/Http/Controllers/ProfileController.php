<?php

namespace App\Http\Controllers;

use App\Models\Dit;
use App\Models\DitStudents;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    public function showProfile($role, $id)
    {
        if ($role === 'staff')
        {
            // select all user data and store them in the variable
            $userData = Dit::find($id);

            return view('staff.viewProfile', [ 'role' => $role, 'userData' => $userData ] );
        }
        else if ($role === 'student')
        {
            // select all user data and store them in the variable
            $studentData = DitStudents::find($id);

            return view('staff.viewProfile', [ 'role' => $role, 'studentData' => $studentData ] );
        }
    }

}
