<?php

namespace App\Models;

use App\Observers\SkillObserver;
use App\Traits\HasLoclaizedFields;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 * 
 *
 * @property int $id
 * @property int $skill_category_id
 * @property string $name
 * @property string|null $slug
 * @property string|null $emoji
 * @property string|null $icon
 * @property string|null $image
 * @property int $proficiency
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SkillCategory $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Translation> $descriptions
 * @property-read int|null $descriptions_count
 * @method static \Database\Factories\SkillFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereEmoji($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereProficiency($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereSkillCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Skill whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Translation> $description
 * @property-read int|null $description_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Project> $projects
 * @property-read int|null $projects_count
 * @mixin \Eloquent
 */
#[ObservedBy(SkillObserver::class)]
class Skill extends Model {
    /** @use HasFactory<\Database\Factories\SkillFactory> */
    use HasFactory, HasLoclaizedFields;
    protected $fillable = [
        "skill_category_id",
        "name",
        "slug",
        "emoji",
        "icon",
        "image",
        "proficiency",
    ];
    protected static function booted(): void {
        static::addGlobalScope('localization', function (Builder $builder) {
            $builder->with(['description']);
        });
    }
    public function category(): BelongsTo {
        return $this->belongsTo(SkillCategory::class, 'skill_category_id');
    }
    public function description(): MorphMany {
        return $this->morphMany(Translation::class, 'model')
            ->where('key', 'description');
    }
    public function projects(): BelongsToMany {
        return $this->belongsToMany(
            Project::class,
            'project_skill',
            'skill_id',
            'project_id',
        );
    }
}
