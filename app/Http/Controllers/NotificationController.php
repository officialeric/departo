<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NotificationController extends Controller
{
    public function messages($type)
    {
        if ($type == 'all')
        {
            return view('staff.notification', ['type' => $type]);
        }
        elseif ($type == 'messages')
        {
            return view('staff.notification', ['type' => $type]);
        }
        elseif ($type == 'reports')
        {
            return view('staff.notification', ['type' => $type]);
        }

    }

}
