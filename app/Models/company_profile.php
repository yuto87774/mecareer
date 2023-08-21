<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company_profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'catchphrase',
        'icon',
        'main_img',
        'self_introduction',
        'experience1_main_img',
        'experience1_sub_img',
        'experience1_text',
        'experience2_main_img',
        'experience2_sub_img',
        'experience2_text',
        'recruiting_people',
        'company_id'
    ];

    protected $primaryKey = 'company_profile_id';

    public function company()
    {
        return $this->belongsTo(company::class, 'company_id');
    }
}
