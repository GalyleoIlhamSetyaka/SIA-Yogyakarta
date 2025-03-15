<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Services\FirebaseService;

class RegisterController extends Controller
{
    // ...

    public function register(Request $request, FirebaseService $firebaseService)
    {
        $this->validator($request->all())->validate();

        try {
            $userRecord = $firebaseService->registerWithEmailAndPassword($request->email, $request->password);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'firebase_uid' => $userRecord->uid,
            ]);

            return redirect(RouteServiceProvider::HOME);
        } catch (\Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}