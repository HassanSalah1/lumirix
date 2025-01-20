<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StarterPack extends Model
{
    protected $fillable = [
        'user_id',
        'doctor_id',
        'pack_id',
        'date_of_application',
        'verification_status',
        'serial_no',
        'certificate_path',
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
