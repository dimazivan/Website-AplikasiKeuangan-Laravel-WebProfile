<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_users extends Model
{
    use HasFactory;

    protected $table = "log_users";

    protected $fillable = [
        'users_id',
        'role',
        'activity',
        'description',
        'status',
        'mac_address',
    ];

    public function users()
    {
        return $this->belongsto('App\Models\Users');
    }
}
