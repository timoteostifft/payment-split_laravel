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
        
        $data = Participant::list($companyId);
        $percent = 0;

        foreach ($data as $participant){
            $percent = ($participant->percent + $percent);
        }

        $company = Company::get($companyId);

        $subtraction = ($company->amount / 100)*$percent;

        // strval($amount);
        $message = "THE COMPANY WILL RECEIVE R$ " . ($company->amount - $subtraction);

        return view('participants.list', [
            'companyId' => $companyId,
            'companyName' => strtoupper($company->name),
            'data' => $data,
            'message' => $message
        ]);
     }
}
