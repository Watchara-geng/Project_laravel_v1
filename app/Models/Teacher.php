<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = "teachers";
    protected $fillable = ['fname','lname','academic_pos','email'];
    
    public function paper()
    {
        return $this->belongsToMany(Paper::class,'teacher_papers');
        // OR return $this->belongsTo('App\User');
    }
}
