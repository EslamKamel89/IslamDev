<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageCreateController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(MessageRequest $request) {

        $validated = $request->validated();
        $message = Message::create($validated);
        return redirect()->intended()->with('success', 'All set! Your message is on its way. 🚀|كل شيء جاهز! رسالتك في طريقها الآن. 🚀');
    }
}
