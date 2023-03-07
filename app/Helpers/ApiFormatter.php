<?php

namespace App\Helpers;

class ApiFormatter
{
  public static $response = [
    'status' => null,
    'message' => null,
    'data' => null
  ];

  public static function createApi($code = 200, $status = null, $message = null, $data = null)
  {
    self::$response['status'] = $status;
    self::$response['message'] = $message;
    self::$response['data'] = $data;

    return response()->json(self::$response, $code);
  }
}
