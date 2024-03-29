<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Roles;

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
        'roles_id',
        'role',
        'status',
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

    public function isAdmin()
    {
        //cek role
        $cekRole = Roles::where('name', 'admin')
        ->get();

        if($cekRole[0]->id == $this->roles_id) {
            return true;
        }

        return false;
    }

    public function isSuper()
    {
        //cek role
        $cekRole = Roles::where('name', 'super')
        ->get();

        if($cekRole[0]->id == $this->roles_id) {
            return true;
        }

        return false;
    }

    public function scopeActiveUser($query)
    {
        return $query->where('status', 1);
    }

    public function scopeDeactiveUser($query)
    {
        return $query->where('status', 2);
    }

    // public function scoperole($query, $type)
    // {
    //     return $query->selectrole($type);
    // }

    public function scopeRole($query)
    {
        return $query->select('role')->groupBy('role');
    }

    // public function scopeCekDuplicate($query, $value)
    // {
    //     return $query->select('username')
    //     ->where('username', $value)
    //     ->where('email', $value);
    // }

    public function scopeCekUsername($query, $value)
    {
        return $query->select('username')->orWhere('username', $value);
    }

    public function scopeCekEmail($query, $value)
    {
        return $query->select('email')->orWhere('email', $value);
    }

    public function scopeCekFileFoto($query, $value)
    {
        return $query->select('file_foto')->orWhere('id', $value);
    }

    public function roles()
    {
        return $this->belongsto('App\Models\Roles');
    }

    public function log_users()
    {
        return $this->hasMany('App\Models\Log_users');
    }

    public function change_logs()
    {
        return $this->hasMany('App\Models\Change_logs');
    }
}
