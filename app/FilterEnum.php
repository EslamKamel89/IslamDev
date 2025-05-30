<?php

namespace App;

enum FilterEnum: string {
    case WEB = 'WEB';
    case MOBILE = 'MOBILE';
    case WEB_AND_MOBILE = 'WEB_AND_MOBILE';
    public static function labels() {
        return collect(self::cases())->map(function ($case) {
            return $case->label();
        })->toArray();
    }
    public function label() {
        if ($this == FilterEnum::WEB_AND_MOBILE) return "Mobile + Web";
        if ($this == FilterEnum::MOBILE) return "Mobile";
        if ($this == FilterEnum::WEB) return "Web";
    }
    public static function values() {
        return array_column(self::cases(), 'value');
    }
    public static function options() {
        return collect(self::cases())->map(function ($case) {
            return [$case->value => $case->label()];
        })->toArray();
    }
}
