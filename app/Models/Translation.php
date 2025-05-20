<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * 
 *
 * @property int $id
 * @property string $locale
 * @property string $model_type
 * @property int $model_id
 * @property string $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $model
 * @method static \Database\Factories\TranslationFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Translation whereValue($value)
 * @mixin \Eloquent
 */
class Translation extends Model {
    /** @use HasFactory<\Database\Factories\TranslationFactory> */
    use HasFactory;
    protected $fillable = [
        "locale",
        "model_type",
        "model_id",
        "key",
        "value",
    ];
    public function model(): MorphTo {
        return $this->morphTo();
    }
}
