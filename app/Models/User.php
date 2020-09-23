<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @mixin IdeHelperUser
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $with = ['role'];

    public function getFullnameAttribute()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function getGuardianAttribute()
    {
        if (!$this->isGuardian()) {
            return null;
        }
        return $this->role;
    }

    public function isGuardian()
    {
        return $this->role_type === Guardian::class;
    }

    public function getEmployeeAttribute()
    {
        if (!$this->isEmployee()) {
            return null;
        }
        return $this->role;
    }

    public function isEmployee()
    {
        return $this->role_type === Employee::class;
    }

    public function guardian()
    {
        if (!$this->isGuardian()) {
            return null;
        }
        return $this->role();
    }

    public function role()
    {
        return $this->morphTo();
    }

    public function employee()
    {
        if (!$this->isEmployee()) {
            return null;
        }
        return $this->role();
    }
}
