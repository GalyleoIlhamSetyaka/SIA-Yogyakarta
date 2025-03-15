<?php

namespace App\Services;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

class FirebaseService
{
    protected $auth;

    public function __construct()
    {
        $this->auth = (new Factory)
            ->withServiceAccount(config('firebase.credentials.file'))
            ->createAuth();
    }

    public function registerWithEmailAndPassword($email, $password)
    {
        return $this->auth->createUserWithEmailAndPassword($email, $password);
    }

    public function signInWithEmailAndPassword($email, $password)
    {
        return $this->auth->signInWithEmailAndPassword($email, $password);
    }

    public function verifyIdToken($idToken)
    {
        return $this->auth->verifyIdToken($idToken);
    }

    public function getUser($uid)
    {
        return $this->auth->getUser($uid);
    }
}