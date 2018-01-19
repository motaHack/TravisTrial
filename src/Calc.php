<?php

namespace Sample;

class Calc {
    function add($a, $b) {
        return $a + $b;
    }

    function sub($a, $b) {
        return $a - $b;
    }
  
    function multi($a, $b) {
        return $a * $b;  
    }

    function division($a,$b) {
        return $a / $b;
    }

    function euler() {
      $sum = 0;
      for($i = 1; $i < 1000; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0){
          $sum += $i;  
        }
      }
      return $sum;  
    }
}
