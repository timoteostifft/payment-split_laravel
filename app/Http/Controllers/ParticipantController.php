<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Company;
use App\Models\CompanyParticipant;
class ParticipantController extends Controller
{
    public function list($companyId){

        $companyName = Company::getName($companyId);

        return view('participants.list', [
            'companyId' => $companyId,
            'companyName' => strtoupper($companyName)
        ]);
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

        $companyName = Company::getName($companyId);

        return view('participants.list', [
            'companyId' => $request->route('id'),
            'companyName' => strtoupper($companyName)
        ]);
    }

}
