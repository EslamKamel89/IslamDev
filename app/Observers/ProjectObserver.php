<?php

namespace App\Observers;

use App\Models\Project;

class ProjectObserver {
    public function created(Project $project): void {
        $project->update([
            'slug' => $project->id . '-' . str($project->title)->slug(),
        ]);
    }
}
