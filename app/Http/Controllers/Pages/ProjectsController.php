<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectsController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) {
        $projects = ProjectResource::collection(
            Project::with(
                ['skills.category']
            )->get()
        );
        return Inertia::render('projects/Index', [
            'projects' => $projects,
        ]);
    }
}
