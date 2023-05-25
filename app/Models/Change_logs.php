<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Change_logs extends Model
{
    use HasFactory;

    protected $table = "change_logs";

    protected $fillable = [
        'users_id',
        'title',
        'type',
        'description',
        'version',
    ];

    public function users()
    {
        return $this->belongsto('App\Models\User');
    }
}
