<?php

namespace App\Http\Controllers\Student\Auth;

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
        if ($request->student()->hasVerifiedEmail()) {
            return redirect()->intended(route('student.dashboard', absolute: false));
        }

        $request->student()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
