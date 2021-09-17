<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserMain;
use http\Exception\RuntimeException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UserMainController extends Controller
{
    public function authByPassword(Request $request)
    {
        $user = User::where('login', $request->login)->where('password', md5($request->password))->first();
        if ($user) {
            $token = $this->createToken($user->id);
            return response()->json([
                'status' => 'success',
                'token' => $token
            ])->setStatusCode(201, 'success');
        } else {
            return response()->json([
                'status' => 'error',
            ])->setStatusCode(201, 'error');
        }
    }

    public function getUserInfoProfile(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'usedData' => Auth::user()
        ]);
    }

    public function signUp(Request $request)
    {
        if (User::where('login', $request->login)->orWhere('email', $request->email)->first()) {
            return response()->json([
                'status' => 'error',
                'error' => 'login or email created before'
            ]);
        }

        $user = User::create([
            'login' => $request->login,
            'password' => md5($request->password),
            'email' => $request->email,
            'fio' => $request->fio,
            'avatar' => 'none'
        ]);

        return response()->json([
            'status' => 'success',
            'userId' => $user->id
        ]);
    }

    public function logout()
    {
        User::where('id', Auth::user()->id)->update(['api_token' => null]);
        return response()->json([
            'status' => 'success',
        ])->setStatusCode(201, 'success');
    }

    public function updateAvatar(Request $request)
    {
        User::where('id', Auth::user()->id)->update(['avatar' => $request->avatar]);

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function createToken($userId)
    {
        $token = Str::random(30);
        User::where('id', $userId)->update(['api_token' => $token]);
        return $token;
    }

    public function updateUserInfo(Request $request)
    {
        User::where('id', Auth::user()->id)->update(['fio' => $request->fio, 'email' => $request->email, 'inn' => $request->inn, 'link' => $request->link, 'city' => $request->city]);
        return response()->json([
            'status' => 'success'
        ]);
    }

    public function createUserInvite(Request $request)
    {
        $code = Str::random(10);
        $invite = 'https://chattingtrain.space/invite?code=' . $code;

        if (!DB::table('invites')->where('code', $code)->first()) {
            DB::table('invites')->insert([
                'userIdInvite' => Auth::user()->id,
                'code' => $code,
                'date' => time(),
                'status' => 'active',
                'userIdActivate' => false
            ]);

            return response()->json([
                'status' => 'success',
                'data' => $invite
            ]);
        }

        return response()->json([
            'status' => 'error',
            'error' => 'errorCreateCode'
        ]);
    }

    public function acceptInvite(Request $request)
    {
        if (DB::table('invites')->where('code', $request->code)->first()) {
            DB::table('invites')->where('code', $request->code)->update([
                'status' => 'activated',
                'userIdActivate' => Auth::user()->id
            ]);

            return response()->json([
                'status' => 'success',
            ]);
        }

        return response()->json([
            'status' => 'error',
            'error' => 'errorFindCode'
        ]);
    }
}
