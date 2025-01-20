<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = [
        'name_en',
        'name_zh',
        'address_en',
        'address_zh',
    ];

    public function getNameAttribute()
    {
        $locale = app()->getLocale(); // Get the current application locale
        return $this->{"name_{$locale}"}; // Dynamically access the name_en or name_zh attribute
    }
}
