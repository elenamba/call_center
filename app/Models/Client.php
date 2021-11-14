<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'client_type'
    ];
    public function user(){

        return $this->belongsTo(User::class,'user_id','id');
    }

    public function call(){
        return $this->hasOne(Call::class,'id','client_id');
    }
}
