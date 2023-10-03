<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'icon', 'birthdate', 'birthdate_visibility', 'birthplace', 'birthplace_visibility',
        'residence', 'residence_visibility', 'company_name', 'company_name_visibility', 'industry',
        'industry_visibility', 'position', 'position_visibility', 'phone_number', 'phone_number_visibility',
        'mobile_number', 'mobile_number_visibility', 'email', 'email_visibility', 'facebook_account',
        'facebook_account_visibility', 'x_account', 'x_account_visibility', 'instagram_account',
        'instagram_account_visibility'
    ];

    /**
     * Get the user that owns the profile.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}