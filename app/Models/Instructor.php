<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $guarded;
    /* protected $primaryKey = "teacher_id";
    

    public function courses()
    {
        return $this->hasMany('App\Models\Course','course_id');
    } */
}
