<?php

namespace App\Enums;

enum UserStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case PENDING = 'pending'; // يمكنك إضافة حالات أخرى حسب الحاجة

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
