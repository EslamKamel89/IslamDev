<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
	class Feedback extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Database\Factories\MessageFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Message query()
 */
	class Message extends \Eloquent {}
}

namespace App\Models{
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
 * @property string $images
 * @property string $videos
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereVideos($value)
 * @property-read int|null $title_count
 * @property string|null $playstore_url
 * @property string|null $applestore_url
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereApplestoreUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project wherePlaystoreUrl($value)
 * @mixin \Eloquent
 * @property \App\FilterEnum $filter
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereFilter($value)
 */
	class Project extends \Eloquent {}
}

namespace App\Models{
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
	class Skill extends \Eloquent {}
}

namespace App\Models{
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
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Translation> $description
 * @property-read int|null $description_count
 * @mixin \Eloquent
 */
	class SkillCategory extends \Eloquent {}
}

namespace App\Models{
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
	class Translation extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

