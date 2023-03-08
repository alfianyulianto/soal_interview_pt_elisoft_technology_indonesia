<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function index()
  {
    // cek jika user yang login belum memiliki data yang lengkap
    if (!Auth::user()->alamat && !Auth::user()->no_ponsel) {
      return view('edit_profil', [
        'title' => 'Edit Profil ' . Auth::user()->name,
        'user' => Auth::user(),
        'message_notification' => 'Please complete your personal data first before you use this system'
      ]);
    }

    return view('dashboard', [
      'title' => 'Dashboard',
      'user' => Auth::user()
    ]);
  }
}
