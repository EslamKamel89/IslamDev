<?php

namespace App\Models;

use App\Observers\ProjectObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

#[ObservedBy(ProjectObserver::class)]
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string|null $thumbnail
 * @property string|null $live_url
 * @property string|null $github_url
 * @property string|null $start_date
 * @property string|null $end_date
 * @property int $is_featured
 * @property int $order
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Translation> $description
 * @property-read int|null $description_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Translation> $features
 * @property-read int|null $features_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Skill> $skills
 * @property-read int|null $skills_count
 * @method static \Database\Factories\ProjectFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereGithubUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereLiveUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Project extends Model {
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;
    protected $fillable = [
        "title",
        "slug",
        "thumbnail",
        "thumbnail",
        "live_url",
        "github_url",
        "start_date",
        "end_date",
        "is_featured",
        "order",
        "status",
    ];
    public function description(): MorphMany {
        return $this->morphMany(Translation::class, 'model')
            ->where('key', 'description');
    }
    public function features(): MorphMany {
        // i will put json encoded list of features as a value
        return $this->morphMany(Translation::class, 'model')
            ->where('key', 'features');
    }
    public function skills(): BelongsToMany {
        return $this->belongsToMany(
            Skill::class,
            'project_skill',
            'project_id',
            'skill_id',
        );
    }
}
