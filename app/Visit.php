<?php
# @Date:   2019-10-29T16:13:44+00:00
# @Last modified time: 2019-12-07T21:12:56+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    public function users(){
      return $this->belongsTo('App\User');
    }

    // public function patients(){
    //   return $this->belongsTo('App\Patient');
    // }
}
