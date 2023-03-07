<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function index(Request $request)
  {
    if (empty($request->id)) {
      $data = User::all();
      if ($data) {
        return ApiFormatter::createApi(200, true, 'Success', $data);
      } else {
        return ApiFormatter::createApi(400, false, 'Fail');
      }
    } else {
      $data = User::where('id', $request->id)->first();
      if ($data) {
        return ApiFormatter::createApi(200, true, 'Success', $data);
      } else {
        return ApiFormatter::createApi(400, false, 'Fail');
      }
    }
  }
}
