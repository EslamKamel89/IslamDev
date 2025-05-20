<?php

namespace App\Observers;

use App\Models\SkillCategory;

class SkillCategoryObserver {
    /**
     * Handle the SkillCategory "created" event.
     */
    public function created(SkillCategory $skillCategory): void {
        $skillCategory->update([
            'slug' => $skillCategory->id . '-' . str($skillCategory->name)->slug(),
        ]);
    }

    /**
     * Handle the SkillCategory "updated" event.
     */
    public function updated(SkillCategory $skillCategory): void {
        //
    }

    /**
     * Handle the SkillCategory "deleted" event.
     */
    public function deleted(SkillCategory $skillCategory): void {
        //
    }

    /**
     * Handle the SkillCategory "restored" event.
     */
    public function restored(SkillCategory $skillCategory): void {
        //
    }

    /**
     * Handle the SkillCategory "force deleted" event.
     */
    public function forceDeleted(SkillCategory $skillCategory): void {
        //
    }
}
