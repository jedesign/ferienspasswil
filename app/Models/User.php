<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;
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

    public function getFullnameAttribute(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function getGuardianAttribute(): ?Guardian
    {
        if (!$this->is_guardian) {
            // TODO[mr,rw]: maybe use optional instead of null (23.09.20 mr)
            // return optional();
            return null;
        }
        return $this->role;
    }

    public function getIsGuardianAttribute(): bool
    {
        return $this->role_type === Guardian::class;
    }

    public function getEmployeeAttribute(): ?Employee
    {
        if (!$this->is_employee) {
            // TODO[mr,rw]: maybe use optional instead of null (23.09.20 mr)
            // return optional();
            return null;
        }
        return $this->role;
    }

    public function getIsEmployeeAttribute(): bool
    {
        return $this->role_type === Employee::class;
    }

    public function guardian(): ?MorphTo
    {
        if (!$this->is_guardian) {
            // TODO[mr,rw]: maybe use optional instead of null (23.09.20 mr)
            // return optional();
            return null;
        }
        return $this->role();
    }

    public function role(): MorphTo
    {
        return $this->morphTo();
    }

    public function employee(): ?MorphTo
    {
        if (!$this->is_employee) {
            // TODO[mr,rw]: maybe use optional instead of null (23.09.20 mr)
            // return optional();
            return null;
        }
        return $this->role();
    }
}
