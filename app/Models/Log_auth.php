<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_auth extends Model
{
    use HasFactory;
    protected $table = "log_auths";

    protected $fillable = [
        'ip_address',
        'activity',
        'description',
        'status',
        'mac_address',
    ];
}
