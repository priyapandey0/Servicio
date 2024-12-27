<?php

namespace App\Http\Controllers\Backend\ForgetPassword;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ForgetPasswordController extends Controller
{

    // Show forgot password form
    public function showForgotPasswordForm()
    {
        return view('backend.login.forgetPassword.forget-password-page');
    }

    public function sendResetLink(Request $request)
    {
        // Validate the email
        $request->validate([
            'email' => 'required|email',
        ]);

        // Send the reset link
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Check the status and redirect accordingly
        if ($status === Password::RESET_LINK_SENT) {
            return redirect()->route('login')->with('success', 'Link sent to your email.');
        } else {
            return redirect()->route('login')->withErrors(['email' => __($status)]);
        }
    }



    // Show reset password form
    public function showResetPasswordForm($token)
    {
        return view('backend.login.forgetPassword.reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
       
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ]);
        $status = Password::reset(
            $request->only('email', 'password', 'token'),
            function ($user) use ($request) {
                if ($user) {
                    $user->forceFill([
                        'password' => Hash::make($request->password),  
                    ])->save();
                }
            }
        );

        // Check if the reset was successful
        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('success', 'Password updated successfully.');
        } else {
            // If the status is not successful, return an error with the status message
            return redirect()->route('login')
            ->with('error' ,'The provided reset token is invalid or expired.');
        }

    }
}
