<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $table = "roles";

    protected $fillable = [
        'name',
    ];

    public function scopeRoleAdmin($query)
    {
        return $query->select('id')->where('name', 'admin');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User');
        // return $this->hasMany('App\Models\User');
    }
}
