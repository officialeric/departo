<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssueController extends Controller
{
   public function createComplaint(){
    return response()->json(
        [
        'message' => 'Issue creation is not working',
        'message-from' => 'Erc Ernst'
        ]);
   }
}
