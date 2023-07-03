<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Register(Request $request) {
        $validator = Validator::make($request -> all(), [
            'fullName' => 'required||max:191',
            'email' => 'required|email|max:191|unique:users,email',
            'password' => 'required||min:8',
        ]);
        if ($validator -> fails()) {
            return response()->json([
                'validation_errors'=>$validator->errors(),
            ]);
        }
        else {
            $selectedOption = $request->selectedOption;
            if($selectedOption === 'personal') {
                $role_id = 1;
            }
            else {
                $role_id = 2;
            }

            $user = User::create([
                'name' => $request->fullName,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'avatar' => $request->avatar,
                'role_id' => $role_id,
            ]);
            $token = $user->createToken($user->email.'_Token')->plainTextToken;

            return response()->json([
                'status'=>200,
                'username'=>$user->name,
                'token'=>$token,
                'message' => 'Đăng kí tài khoản thành công'
            ]);
        }
    }

    public function Login(Request $request) {
        $validator = Validator::make($request -> all(), [
            'email' => 'required|email|max:191',
            'password' => 'required||min:8',
        ]);
        if ($validator -> fails()) {
            return response()->json([
                'validation_errors'=>$validator->errors(),
            ]);
        }
        else {
            $user = User::where('email', $request->email)->first();
 
            if (! $user || ! Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status'=>401,
                    'message' => 'Thông tin đăng nhập không hợp lệ',
                ]);
            }
            else {
                $token = $user->createToken($user->email.'_Token')->plainTextToken;

                return response()->json([
                    'status'=>200,
                    'username'=>$user->name,
                    'token'=>$token,
                    'message' => 'Đăng nhập thành công'
                ]);
            }
        }
    } 
    public function Logout() {
        auth()->user()->tokens()->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Đăng xuất thành công',
        ]);
    }
}
