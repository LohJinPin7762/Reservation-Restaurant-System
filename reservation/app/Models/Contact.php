<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=['name','email','number','image','CategoryID',];
    public function contact(){
        return $this->belongsTo('App\Models\Category');
    }
}
