<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;
    protected $table = "papers";
    public function teacher()
    {
        return $this->belongsToMany(Teacher::class,'teacher_papers');
        // OR return $this->hasOne('App\Phone');
    }
}
