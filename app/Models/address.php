<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'numer',
        'postcode',
        'country'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
