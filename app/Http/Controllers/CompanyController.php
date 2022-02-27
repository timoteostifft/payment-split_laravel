<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

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

        return redirect()->route('company_form');;
    }

     public function delete(Request $request){
        
        $id = $request->route('id');
        
        Company::remove($id);

        return redirect()->route('company_form');

     }
}
