<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable=['restaurant','name','contact','image','date','time','available','CategoryID'];
    public function reservation(){
        return $this->belongsTo('App\Models\Category');
    }
}
