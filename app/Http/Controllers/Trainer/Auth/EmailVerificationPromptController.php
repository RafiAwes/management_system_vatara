<?php

namespace App\Http\Controllers\Trainer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->admin()->hasVerifiedEmail()
                    ? redirect()->intended(route('trainer.dashboard', absolute: false))
                    : view('Trainer.auth.verify-email');
    }
}
