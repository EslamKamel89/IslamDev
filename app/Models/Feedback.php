<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 *
 *
 * @property int $id
 * @property int $rating
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Translation> $contact
 * @property-read int|null $contact_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Translation> $name
 * @property-read int|null $name_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Translation> $quote
 * @property-read int|null $quote_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Translation> $title
 * @property-read int|null $title_count
 * @method static \Database\Factories\FeedbackFactory factory($count = null, $state = [])
 * @method static Builder<static>|Feedback newModelQuery()
 * @method static Builder<static>|Feedback newQuery()
 * @method static Builder<static>|Feedback query()
 * @method static Builder<static>|Feedback whereCreatedAt($value)
 * @method static Builder<static>|Feedback whereId($value)
 * @method static Builder<static>|Feedback whereRating($value)
 * @method static Builder<static>|Feedback whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Feedback extends Model {
    /** @use HasFactory<\Database\Factories\FeedbackFactory> */
    use HasFactory;
    protected $table = 'feedbacks';

    protected $fillable = [
        'rating',
    ];
    protected static function booted(): void {
        static::addGlobalScope('localization', function (Builder $builder) {
            $builder->with(['quote', 'name', 'title', 'contact']);
        });
    }
    public function quote(): MorphMany {
        return $this->morphMany(Translation::class, 'model')
            ->where('key', 'quote');
    }
    public function name(): MorphMany {
        return $this->morphMany(Translation::class, 'model')
            ->where('key', 'name');
    }
    public function title(): MorphMany {
        return $this->morphMany(Translation::class, 'model')
            ->where('key', 'title');
    }
    public function contact(): MorphMany {
        // i will put json encoded list of contact info as a value
        return $this->morphMany(Translation::class, 'model')
            ->where('key', 'contact');
    }
}
