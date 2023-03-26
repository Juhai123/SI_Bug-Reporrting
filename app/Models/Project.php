<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable=['project_name','instansi_id', 'link'];

    public function instansi(){
        return $this->belongsTo(Instansi::class);
    }

    public function bug()
    {
        return $this->hasMany(Bug::class);
    }

    public function project_user()
    {
        return $this->belongsTo(Project_user::class);
    }
}
