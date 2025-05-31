<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Resources\FeedbackResource;
use App\Http\Resources\ProjectResource;
use App\Models\Feedback;
use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;


class HomeController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) {
        $projects = ProjectResource::collection(
            Project::with(
                ['skills.category']
            )->get()
        );
        $feedbacks = FeedbackResource::collection(Feedback::all());
        return Inertia::render('home/Index', [
            'projects' => $projects,
            'feedbacks' => $feedbacks,
            'flash' => ['success' => ['title' => 'Welcome', 'content' => 'Glad to have you here! Take a look around, and I hope you like what you see.']]
        ]);
    }
}
