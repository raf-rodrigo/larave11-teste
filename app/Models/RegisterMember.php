<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterMember extends Model
{
    use HasFactory;

    protected $guarded = [
        'user_idd',
        'name',
        'email',
        'cellphone',
        'status',
        'zipcode',
        'address',
        'addressNumber',
        'addressComplement',
        'neighborhood',
        'city',
        'state',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
