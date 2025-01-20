<?php

namespace App\Enums;

enum UserPackStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
