<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\Mail\MessageNotification;
use App\Mail\MessageRecieved;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageCreateController extends Controller {
    /**
     * Handle the incoming request.
     */
    public function __invoke(MessageRequest $request) {
        $validated = $request->validated();
        $message = Message::create($validated);
        Mail::to($request->email)->send(new MessageRecieved($request->name, $request->content));
        Mail::to('eslamkamelforex@gmail.com')->send(new MessageNotification($request->name, $request->email, $request->content, now()));
        if ($request->has('to')) {
            return redirect()->route($request->get('to'));
        }
        return redirect()->route('contact');
    }
}
