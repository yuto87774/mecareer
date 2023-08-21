<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerificationToken extends Model
{
    use HasFactory;

    protected $fillable = [
        'token',
        'company_id',
        'expires_at',
    ];

    protected $dates = [
        'expires_at',
    ];

    // 認証トークンは1つの会社に属するという関係
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }
}
