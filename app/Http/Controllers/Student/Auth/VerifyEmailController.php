<?php

namespace App\Http\Controllers\Student\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->student()->hasVerifiedEmail()) {
            return redirect()->intended(route('student.dashboard', absolute: false).'?verified=1');
        }

        if ($request->student()->markEmailAsVerified()) {
            event(new Verified($request->student()));
        }

        return redirect()->intended(route('student.dashboard', absolute: false).'?verified=1');
    }
}
