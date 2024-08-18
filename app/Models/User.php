<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'role',
        'name',
        'email',
        'phone',
        'password',
        'profile_photo_path',
    ];

    /**
     * The attributes that are pre-defined.
     *
     * @var array<int, string>
     */

    protected $attributes = [
        'status' => 'enabled',
        'role' => 'patient',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
    
    // Table relationships
    public function doctorDetails() {
        return $this->hasOne(DoctorDetails::class, 'user_id');
    }

    public function patientDetails() {
        return $this->hasOne(PatientDetails::class, 'user_id');
    }

    public function hospital() {
        return $this->hasOne(Hospital::class, 'user_id');
    }

    public function department() {
        return $this->hasOne(Department::class, 'user_id');
    }
}
