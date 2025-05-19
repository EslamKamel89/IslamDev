<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request) {
        return Inertia::render('contact/Index');
    }
}
