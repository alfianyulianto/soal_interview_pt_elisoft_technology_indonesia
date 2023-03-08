<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Riskihajar\Terbilang\Facades\Terbilang;

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
    $number = Str::of($request->number)->explode('.');
    $resultNumber = $number->join('');
    $terbilang  = Terbilang::make($resultNumber);

    return response()->json(['terbilang' => $terbilang]);
  }
}
