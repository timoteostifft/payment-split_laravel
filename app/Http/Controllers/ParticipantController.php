<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function list(){

        return view('participants.list');
        
        // $data = Participant::list();

        // return view('app',['companiesList' => $data]);
    }

    public function add(){

        return view('participants.list');
    }

}
