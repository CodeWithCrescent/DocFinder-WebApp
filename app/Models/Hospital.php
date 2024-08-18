<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'email',
        'phone_number',
        'instagram',
        'facebook',
        'linkedin',
        'twitter',
        'bio',
    ];


    /**
     * Get the user that added the Hospital
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the ddepartments for the Hospital
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function department()
    {
        return $this->hasMany(Department::class, 'hospital_id');
    }
}
