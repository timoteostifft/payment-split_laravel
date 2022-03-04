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

        $data = Participant::list($companyId);

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

        $data = Participant::list($request->route('id'));

        return redirect()->route('listParticipants', ['companyId' => $request->route('id')]);

    }

    public function remove(Request $Request, $companyId, $participantId){
    
        CompanyParticipant::remove($companyId, $participantId);

        Participant::remove($participantId);

        return redirect()->route('listParticipants', ['companyId' => $companyId]);

    }
}
