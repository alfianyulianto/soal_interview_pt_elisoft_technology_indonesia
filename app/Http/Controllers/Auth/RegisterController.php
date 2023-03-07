<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
  public function index()
  {
    return view('auth.register');
  }

  public function register(Request $request)
  {
    $validated = $request->validate([
      'name' => ['required', 'string'],
      'email' => ['required', 'email:dns', 'unique:App\Models\User,email'],
      'password' => ['required', 'min:8', Password::min(8)->letters()->mixedCase()],
      'retype_password' => ['required', 'min:8', 'same:password'],
    ]);

    $validatedData = [
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password)
    ];

    User::create($validatedData);

    return redirect('/login')->with('success_register', 'Successful registration! Please login!');
  }
}
