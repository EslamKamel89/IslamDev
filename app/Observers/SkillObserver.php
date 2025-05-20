<?php

namespace App\Observers;

use App\Models\Skill;

class SkillObserver {
    /**
     * Handle the Skill "created" event.
     */
    public function created(Skill $skill): void {
        $skill->update([
            'slug' => $skill->id . '-' . str($skill->name)->slug(),
        ]);
    }

    /**
     * Handle the Skill "updated" event.
     */
    public function updated(Skill $skill): void {
        //
    }

    /**
     * Handle the Skill "deleted" event.
     */
    public function deleted(Skill $skill): void {
        //
    }

    /**
     * Handle the Skill "restored" event.
     */
    public function restored(Skill $skill): void {
        //
    }

    /**
     * Handle the Skill "force deleted" event.
     */
    public function forceDeleted(Skill $skill): void {
        //
    }
}
