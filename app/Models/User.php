<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @mixin IdeHelperUser
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'phone'
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

    public function getFullnameAttribute(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function getGuardianAttribute(): ?Guardian
    {
        if (!$this->is_guardian) {
            return null;
        }

        /** @var Guardian $role */
        $role = $this->role;
        return $role;
    }

    public function getIsGuardianAttribute(): bool
    {
        return $this->role_type === Guardian::class;
    }

    public function getEmployeeAttribute(): ?Employee
    {
        if (!$this->is_employee) {
            return null;
        }
        /** @var Employee $role */
        $role = $this->role;
        return $role;
    }

    public function getIsEmployeeAttribute(): bool
    {
        return $this->role_type === Employee::class;
    }

    public function role(): MorphTo
    {
        return $this->morphTo();
    }
}
