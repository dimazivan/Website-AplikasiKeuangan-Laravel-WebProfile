<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_projects extends Model
{
    use HasFactory;
    protected $table = "detail_projects";

    protected $fillable = [
        'projects_id',
        'language',
        'color',
    ];

    public function Projects()
    {
        return $this->belongsto('App\Models\Projects');
    }
}
