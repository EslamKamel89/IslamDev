<?php

namespace App;

enum FilterEnum: string {
    case LIVEWIRE = 'LIVEWIRE';
    case VILT = 'VILT';
    case NUXT = 'NUXT';
    case FLUTTER = 'FLUTTER';
    case OTHER = 'OTHER';
    public static function labels() {
        return collect(self::cases())->map(function ($case) {
            return $case->label();
        })->toArray();
    }
    public function label() {
        if ($this == FilterEnum::LIVEWIRE) return "Livewire";
        if ($this == FilterEnum::VILT) return "VILT";
        if ($this == FilterEnum::NUXT) return "Nuxt js";
        if ($this == FilterEnum::FLUTTER) return "Flutter";
        if ($this == FilterEnum::OTHER) return "Other";
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
