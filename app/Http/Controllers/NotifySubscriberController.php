<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNotifySubscriberRequest;
use App\Mail\SubscriberConfirmation;
use App\Models\NotifySubscriber;
use Illuminate\Support\Facades\Mail;

class NotifySubscriberController extends Controller
{
    public function store(StoreNotifySubscriberRequest $request)
    {
        $data = $request->validated();

        $subscriber = NotifySubscriber::firstOrCreate(
            ['email' => $data['email']],
            [
                'name' => $data['name'],
                'phone' => $data['phone'] ?? null,
            ]
        );

        if ($subscriber->wasRecentlyCreated) {
            Mail::to($subscriber->email)->send(new SubscriberConfirmation($subscriber));
            $message = "Thanks! We'll notify you when we launch.";
        } else {
            $message = "You're already on the list!";
        }

        return response()->json([
            'success' => true,
            'message' => $message,
        ]);
    }
}
