<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'role',
        'phone',
        'address',
        'district',
        'ward',
        'city',
        'country',
        'province',
        'detail_address',
        'file_foto',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // public function scoperole($query, $type)
    // {
    //     return $query->selectrole($type);
    // }

    public function scopeRole($query)
    {
        return $query->select('role')->groupBy('role');
    }

    public function scopeCekUsername($query, $value)
    {
        return $query->select('username')->where('username', $value);
    }

    public function scopeCekEmail($query, $value)
    {
        return $query->select('email')->where('email', $value);
    }

    public function scopeCekFileFoto($query, $value)
    {
        return $query->select('file_foto')->where('id', $value);
    }

    public function log_users()
    {
        return $this->hasMany('App\Models\Log_users');
    }
}
