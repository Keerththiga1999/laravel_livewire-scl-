<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Grade extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=[];
    public function students()
    {
        return $this->hasMany(Student::class,'student_id','id');
    }
    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
