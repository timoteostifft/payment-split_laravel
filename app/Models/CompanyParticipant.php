<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;

class CompanyParticipant extends Model
{
  protected $connection = 'sqlite';
  protected $table = 'companies_participants';

  public function add($companyId, $participantId){
    $sql = self::insert([
      'company_id' => $companyId,
      'participant_id' => $participantId
    ]);
  }

  public function remove(){}
}