<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FirebaseServices; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;

function firebase_logout() { 

    // Clear the authentication token from local storage or cookies on the client side 

    echo '<script>localStorage.removeItem("firebaseAuthToken");</script>'; 

    return 'Logout successful'; 

} 