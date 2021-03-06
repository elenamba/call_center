<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    use HasFactory;

    protected $fillable = [
        'duration', 'type_call', 'date', 'external_call_score','client_id'
    ];

    public $timestamps = false;

    public function client(){

        return $this->belongsTo(Client::class,'client_id','id');
    }

    public function scopeGetCalls(){

        return $this->where('duration','>=','10')->orderBy('date')->paginate(30);


    }
}
