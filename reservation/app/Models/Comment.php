<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=['name','email','CategoryID','comment'];
    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }
}
