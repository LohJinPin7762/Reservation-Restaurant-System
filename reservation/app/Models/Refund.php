<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;
    protected $fillable=['name','email','number','price','image','CategoryID'];
    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }
}
