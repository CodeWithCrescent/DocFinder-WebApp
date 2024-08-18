<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DoctorDetails extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'hospital_id',
        'department_id',
        'specialty',
        'gender',
        'started_year',
        'bio',
    ];


    /**
     * The attributes that are pre-defined.
     *
     * @var array<int, string>
     */

    protected $attributes = [
        'specialty' => 'General',
    ];

    /**
     * Get the user that owns the DoctorDetails
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
