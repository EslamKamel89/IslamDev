<?php

namespace App\Traits;

use Illuminate\Support\Collection;

trait HasLoclaizedFields {
    public function getLocalizedField(Collection $translations): array {
        return $translations->pluck(['locale', 'value'])->toArray();
    }
}
