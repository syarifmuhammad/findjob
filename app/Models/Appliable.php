<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Appliable extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'name',
        'phone_code',
        'phone',
        'email',
        'resume',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function appliable() {
        return $this->morphTo();
    }
}
