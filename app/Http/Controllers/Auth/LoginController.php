<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Services\FirebaseService;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // ...

    public function login(Request $request, FirebaseService $firebaseService)
    {
        $this->validateLogin($request);

        try {
            $signInResult = $firebaseService->signInWithEmailAndPassword($request->email, $request->password);

            $user = User::where('email', $request->email)->first();

            Auth::login($user);

            return redirect()->intended(RouteServiceProvider::HOME);
        } catch (\Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}