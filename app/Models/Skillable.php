<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skillable extends Model
{
    use HasFactory;

    public $fillable = [
        'skill_id'
    ];

    public function skill() {
        return $this->belongsTo(Skill::class, 'skill_id', 'id');
    }
}
