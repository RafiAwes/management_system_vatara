<?php

namespace App\Http\Controllers\Trainer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->admin()->hasVerifiedEmail()) {
            return redirect()->intended(route('trainer.dashboard', absolute: false));
        }

        $request->admin()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
