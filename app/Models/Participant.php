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
        'amount' => $data['amount']
    ]);
    
    }
} 