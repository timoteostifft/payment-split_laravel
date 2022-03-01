<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\CompanyParticipant;
class ParticipantController extends Controller
{
    public function list($companyId){

        return view('participants.list', ['companyId' => $companyId]);
    }

    public function add(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'cnpj' => 'required',
            'percent' => 'required'
            ]);

        Participant::add($validated);
        
        $participantId = Participant::getId();

        CompanyParticipant::add($request->route('id'),$participantId);

        return view('participants.list', ['companyId' => $request->route('id')]);
    }

}
