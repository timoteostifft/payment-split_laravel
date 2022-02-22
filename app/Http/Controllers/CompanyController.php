<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public $isCompanyFormVisible = true;

    public function list(){
        return view('companies.form');
    }

    public function save(){
        return view('companies.form');
    }
}
