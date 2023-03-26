<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable=['bug_id','user_id', 'description', 'start', 'end', 'information'];

    public function bugs(){
        return $this->belongsTo(Bug::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }


}
