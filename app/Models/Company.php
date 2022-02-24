<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Company extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'Companies';

    public static function getCompaniesList(){
        
        $sql = DB::table('Companies')->get();

        unset($companiesList);
        $companiesList = array();

        foreach ($sql as $company)
        {
            array_push($companiesList, $company);
        }

        return $companiesList;

    }

    public static function addCompany($data){

        // DB::enableQueryLog();

        $sql = self::insert([
            'Name' => $data['name'],
            'CNPJ' => $data['cnpj'],
            'Amount' => $data['amount']
        ]);

        // dd(DB::getQueryLog());
    }
}
