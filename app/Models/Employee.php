<?php

namespace App\Models;

use App\Traits\UserBaseInformation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @mixin IdeHelperEmployee
 */
class Employee extends Model
{
    use HasFactory, UserBaseInformation;

    protected $fillable = ['public_transport_subscription'];

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'role');
    }
}
