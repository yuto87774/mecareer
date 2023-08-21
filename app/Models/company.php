<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class company extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $primaryKey = 'company_id';

    protected $fillable = [
        'name',
        'person_in_charge',
        'email',
        'phone_number',
        'password',
        'is_verified',
        'feature_id',
        'industry_id',
        'speciality_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',

    ];

    // 1つの会社は1つの認証トークンを持つ可能性があるという関係
    public function verificationToken()
    {
        return $this->hasOne(VerificationToken::class, 'company_id', 'company_id');
    }

    public function profile()
    {
        return $this->hasOne(company_profile::class, 'company_id');
    }
}
