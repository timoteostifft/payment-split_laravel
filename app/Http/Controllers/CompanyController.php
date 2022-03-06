<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Participant;

class CompanyController extends Controller
{
    public function list(){

        $data = Company::list();

        return view('app',['companiesList' => $data]);
    }

    public function save(Request $request){
        $validated = $request->validate([
            "name" => 'required',
            'cnpj' => 'required',
            'amount' => 'required',
        ]);

        Company::add($validated);

        return redirect()->route('companyForm');;
    }

     public function delete(Request $request){
        
        $id = $request->route('id');
        
        Company::remove($id);

        return redirect()->route('companyForm');

     }

     public function split($companyId){

        $companyName = Company::getName($companyId);

        $data = Participant::list($companyId);

        $amount = 0;

        foreach ($data as $participant){
            $amount = ($participant->percent + $amount);
        }
    
        echo '<script> confirm("TESTE")</script>';
        $isConfirmed = True;
        
        if ($isConfirmed){
            return redirect()->route('listParticipants', ['id' => $companyId]);
        }
     }
}
