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
        $sql = self::select([
            'id',
            'name',
            'cpnj',
            'amount'
        ]);

        return $sql;
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
