<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Like extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'tui4_id' => 'required',
        'title' => 'required',
        
    );
    

    public function book(){
        return $this->hasOne('App\Models\Like');
    }
}