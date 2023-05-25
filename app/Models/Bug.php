<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;

    protected $fillable=['name','project_id', 'user_id', 'description', 'file', 'status','progress', 'priority'];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function task(){
        return $this->hasMany(Task::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
