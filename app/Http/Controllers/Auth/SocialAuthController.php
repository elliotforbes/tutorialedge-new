<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class SocialAuthController extends Controller
{
    
    public function redirect(Request $request)
    {
        return Socialite::driver('facebook')->redirect();
    }
    
    public function callback()
    {
        
    }
    
   
}
