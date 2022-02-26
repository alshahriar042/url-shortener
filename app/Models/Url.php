<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'orginal_url',
        'shortened_url',
        'expiration_duration',
        'ip_hit_number',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function visits(){
        return $this->hasMany(Visit::class,'url_id','id');
    }
}
