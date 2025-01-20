<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RedeemingPack extends Model
{
    protected $fillable = [
        'user_id',
        'doctor_id',
        'pack_id',
        'redemption_date',
        'serial_number',
        'certificate_path',
        'used_applications', // JSON array storing the IDs of LumirixOnTrack applications used
    ];

    protected $casts = [
        'redemption_date' => 'datetime',
        'used_applications' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function pack()
    {
        return $this->belongsTo(Pack::class);
    }

}
