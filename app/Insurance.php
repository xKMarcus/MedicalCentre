<?php
# @Date:   2019-10-29T16:13:44+00:00
# @Last modified time: 2019-10-29T21:41:42+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    public function users(){
      return $this->belongsTo('App\User');
    }

    public function InsuranceCompanies(){
      return $this->belongsTo('App\InsuranceCompany');
    }
}
