<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';
    protected $fillable = [
      'project_id'  
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
