<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    public function skillables()
    {
        return $this->morphMany(Skillable::class, 'skillable');
    }

    public function appliables()
    {
        return $this->morphMany(Appliable::class, 'appliable');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
