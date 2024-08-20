<?php

namespace App\Http\Controllers\Trainer\Auth;

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
        if ($request->trainer()->hasVerifiedEmail()) {
            return redirect()->intended(route('trainer.dashboard', absolute: false).'?verified=1');
        }

        if ($request->trainer()->markEmailAsVerified()) {
            event(new Verified($request->trainer()));
        }

        return redirect()->intended(route('trainer.dashboard', absolute: false).'?verified=1');
    }
}
