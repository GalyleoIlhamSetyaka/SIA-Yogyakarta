<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FirebaseServices; // Perbaikan di sini
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    protected $firebaseService;

    public function __construct(FirebaseService $firebaseService) // Perbaikan di sini
    {
        $this->firebaseService = $firebaseService;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {
            $signInResult = $this->firebaseService->signInWithEmailAndPassword($request->email, $request->password);

            $user = User::where('email', $request->email)->first();

            if ($user) {
                Auth::login($user);
                return redirect()->intended('/home');
            } else {
                return back()->withErrors(['message' => 'User not found']);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}