<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Users;
use Illuminate\Console\View\Components\Alert;

class UserController extends Controller
{
    // public function Register(Request $request)
    // {
    //     $input = $request->validate([
    //         'fullName' => 'required',
    //         'phone' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:8',
    //         'confirmPassword' => 'required|same:password',
    //         'selectedOption' => 'required|in:personal,seller',
    //     ]);

    //     $input['password'] = bcrypt($input['password']);
    //     $users = Users::create($input);

    //     return redirect()->route('login')->with('success', 'Đăng ký thành công. Vui lòng đăng nhập.');
    // }

    public function Register(Request $request)
    {
        // Lưu dữ liệu từ yêu cầu vào cơ sở dữ liệu
        $user = new Users;
        $user->name = $request->input('fullName');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role_id = intval($request->input('selectedOption'));
        $user->isActive = true;
        $user->save();

        // Trả về phản hồi thành công hoặc thông tin về người dùng đã được lưu
        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ], 201);
    }


public function login(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    $user = Users::where('email', $email)->first();

    if ($user && $user->password === $password && $user->email === $email) {
        return response()->json([
            'success' => true,
            'user' => $user,
        ]);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'Đăng nhập thất bại. Mật khẩu hoặc email không đúng.',
        ]);
    }
}


}
