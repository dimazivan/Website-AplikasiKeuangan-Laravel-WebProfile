<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $table = "projects";

    protected $fillable = [
        'title',
        'date',
        'status',
        'type',
        'feature',
        'description',
        'github',
    ];

    public function Detail_projects()
    {
        return $this->hasMany('App\Models\Detail_projects');
    }
}
