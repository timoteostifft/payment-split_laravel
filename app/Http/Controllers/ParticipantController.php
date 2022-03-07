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

        $company = Company::get($companyId);

        $data = Participant::list($companyId);

        return view('participants.list', [
            'companyId' => $companyId,
            'companyName' => strtoupper($company->name),
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
        
        $participant = Participant::get();

        CompanyParticipant::add($request->route('id'),$participant->id);

        return redirect()->route('listParticipants', ['id' => $request->route('id')]);

    }

    public function remove(Request $Request, $companyId, $participantId){
    
        CompanyParticipant::remove($companyId, $participantId);

        Participant::remove($participantId);

        return redirect()->route('listParticipants', ['id' => $companyId]);

    }
}
