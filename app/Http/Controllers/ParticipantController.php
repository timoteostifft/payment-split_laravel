<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Company;
use App\Models\CompanyParticipant;
use DB;
class ParticipantController extends Controller
{
    public function list($companyId){

        $companyName = Company::getName($companyId);

        $data = DB::select('select * from participants, companies_participants
        where ? = companies_participants.company_id and participants.id = companies_participants.participant_id
        ',[$companyId]);

        return view('participants.list', [
            'companyId' => $companyId,
            'companyName' => strtoupper($companyName),
            'data' => $data
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

        $companyName = Company::getName($request->route('id'));

        $data = DB::select('select * from participants, companies_participants
        where ? = companies_participants.company_id and participants.id = companies_participants.participant_id
        ',[$request->route('id')]);

        return view('participants.list', [
            'companyId' => $request->route('id'),
            'companyName' => strtoupper($companyName),
            'data' => $data
        ]);
    }

}
