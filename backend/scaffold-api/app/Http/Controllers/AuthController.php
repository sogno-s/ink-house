<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:user,admin'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role ?? 'user'
        ]);

        return response()->json(['user' => $user], 201);
    }

    public function loginUser(Request $request){
        $credentails = $request->only('email', 'password');
        if (auth()->attempt($credentails)){
            $user = auth()->user();
            $token = $user->createToken('AppShop')-> plainTextToken;
            return response()->json(['token'=>$token], 200);
            log('Token ', $token);
        }
        Log::info('Authentication failed for user: ', $credentails);
        return response()->json(['error'=>'Unauthorized'], 401);

    }

    public function user(Request $request){
        return response()->json($request->user());
    }
        public function logout(Request $request){
            $request->user()->currentAccessToken()->delete();
            return response()->json(['message' => 'Logged out successfully']);
        }
}
