<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRepository;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(protected UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->route('admin.dashboard');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function doRegister(UserRequest $request)
    {
        $data = $request->validated();

        $this->userRepository->create($data);

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
