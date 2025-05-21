<?php

namespace App\Models;

use App\Observers\SkillCategoryObserver;
use App\Traits\HasLoclaizedFields;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

/**
 *
 *
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Translation> $descriptions
 * @property-read int|null $descriptions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Skill> $skills
 * @property-read int|null $skills_count
 * @method static \Database\Factories\SkillCategoryFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
#[ObservedBy(SkillCategoryObserver::class)]
class SkillCategory extends Model {
    /** @use HasFactory<\Database\Factories\SkillCategoryFactory> */
    use HasFactory, HasLoclaizedFields;
    protected $fillable = [
        'name',
        'slug',
    ];
    public function skills(): HasMany {
        return $this->hasMany(Skill::class);
    }
    public function description(): MorphMany {
        return $this->morphMany(Translation::class, 'model')
            ->where('key', 'description');
    }
}
