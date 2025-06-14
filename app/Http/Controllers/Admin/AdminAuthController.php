<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminAuthRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminAuthController extends Controller
{
    public function create()
    {
        return view('admin.auth.login');
    }

    public function store(AdminAuthRequest $request)
    {
        $data = $request->validated();
        if (Auth::guard('admins')->attempt([
            'email' => $data['email'],
            'password' => $data['password']
        ])) {
            return redirect(RouteServiceProvider::ADMIN_PANEL);
        }
        throw ValidationException::withMessages([
            'email' => trans('ادمینی با این مشخصات وجود ندارد'),
        ]);
    }

    public function logout(){
        Auth::guard('admins')->logout();
        // return redirect()->route('admin.login.create');
        return redirect(RouteServiceProvider::ADMIN_LOGOUT);
    }
}
