<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;

class LoginController extends Controller
{
    public function loginVK () {
        return Socialite::with('vkontakte')->redirect();
    }

    public function responseVK (UserRepository $userRepository) {
        $user = Socialite::driver('vkontakte')->user();
        $userInSystem = $userRepository->getUserBySocId($user, 'vk');
        Auth::login($userInSystem);
        return redirect()->route('home');
    }
}
