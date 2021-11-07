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
        return $this->belongsToMany(User::class,'teacher_papers');
        // OR return $this->hasOne('App\Phone');
    }
    public function source()
    {
        return $this->belongsToMany(Source_data::class,'source_papers');
        // OR return $this->hasOne('App\Phone');
    }
}
