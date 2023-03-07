<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Riskihajar\Terbilang\Facades\Terbilang;
use Riskihajar\Terbilang\Terbilang as TerbilangTerbilang;

class TerbilangController extends Controller
{
  public function index()
  {
    return view('terbilang', [
      'title' => 'Tulis Terbilang'
    ]);
  }

  public function terbilang(Request $request)
  {
    return $request;
    $terbilang  = Terbilang::make($request->number);

    return response()->json(['terbilang' => $terbilang]);
  }
}
