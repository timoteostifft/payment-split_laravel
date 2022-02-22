<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company as CompaniesModel;

class CompanyController extends Controller
{
    public function list(){
        return view('companies.form');
    }

    public function save(Request $request){
        $validated = $request->validate([
            "name" => 'required',
            'cnpj' => 'required',
            'amount' => 'required',
        ]);

        CompaniesModel::addCompany($validated);

        return view('companies.form');
    }
}
