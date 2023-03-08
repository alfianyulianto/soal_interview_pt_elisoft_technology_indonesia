<?php

namespace App\Helpers;

class SwapVariable
{
  public static function swappingVariable(int $a, int $b): string
  {
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;

    return
      <<<FIAN
        Setelah di lakukan swapping:
        variabel A menjadi : $a
        variabel B menjadi : $b
      FIAN;
  }
}
