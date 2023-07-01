<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    public function showResetForm(Request $request, $token)
    {
        return view('auth.reset-password', ['token' => $token, 'email' => $request->email]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset($request->only(
            'email', 'password', 'password_confirmation', 'token'
        ), function ($user) use ($request) {
            $user->forceFill([
                'password' => bcrypt($request->password),
                'remember_token' => \Illuminate\Support\Str::random(60),
            ])->save();

            // Đăng nhập người dùng sau khi đã đặt lại mật khẩu thành công (tuỳ chọn)
            // Auth::login($user);
        });

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', trans($status));
        }

        return back()->withErrors(['email' => trans($status)]);
    }
}
