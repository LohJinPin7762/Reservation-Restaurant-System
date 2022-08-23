<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=['name','type','price','image','number','CategoryID'];
    public function payment(){
        return $this->belongsTo('App\Models\Category');
    }
}