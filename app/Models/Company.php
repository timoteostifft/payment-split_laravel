<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class Company extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'companies';

    public static function list(){
        
        $sql = DB::table('companies')->get();

        unset($companiesList);
        $companiesList = array();

        foreach ($sql as $company)
        {
            array_push($companiesList, $company);
        }

        return $companiesList;

    }

    public static function add($data){

        // DB::enableQueryLog();

        $sql = self::insert([
            'name' => $data['name'],
            'cnpj' => $data['cnpj'],
            'amount' => $data['amount']
        ]);

        // dd(DB::getQueryLog());
    }

     public static function remove($id){
        
         $sql = self::where('ID', $id);
         $sql->delete();
     }

     public static function getName($id){

        $company = DB::table('companies')->where('id', $id)->first();
 
        return ($company->name);
     }
}
