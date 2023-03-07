<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index()
  {
    return view('auth.login');
  }

  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      // masukan user yang sedang login ke dalam tabel user_login
      $id_user = User::where('email', $request->email)->first()->id;
      $user_login = UserLogin::where('user_id', $id_user)->first();
      if ($user_login) {
        $user_login->update([
          'active_login' => true,
          'created_at' => date('Y-F-d H:i:s'),
        ]);
      } else {
        UserLogin::create([
          'user_id' => $id_user,
          'active_login' => true,
        ]);
      }

      return redirect()->intended('dashboard');
    }

    return redirect('/login')->with('error-login', 'The provided credentials do not match our records.');
  }

  public function logout(Request $request)
  {
    $id_user = Auth::user()->id;

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    UserLogin::where('user_id', $id_user)->first()->update([
      'active_login' => false,
      'updated_at' => date('Y-F-d H:i:s')
    ]);

    return redirect('/login');
  }
}
