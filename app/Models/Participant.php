<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class Participant extends Model
{
    protected $connection = 'sqlite';
    protected $table = 'participants';

    public function add($data){

      $sql = self::insert([
        'name' => $data['name'],
        'cnpj' => $data['cnpj'],
        'percent' => $data['percent']
      ]);
    
    }

    public function list($companyId){

      $data = DB::select('select * from participants, companies_participants
      where ? = companies_participants.company_id and participants.id = companies_participants.participant_id
      ',[$companyId]);

      return $data;
    }

    public function remove($id){

      $sql = self::where('id', $id);
      $sql->delete();

    }

    public function getId(){

      $sql = DB::table('participants')->orderBy('id','desc')->first();

      return $sql->id;

    }
} 