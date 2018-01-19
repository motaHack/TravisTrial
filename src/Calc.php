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

    function euler1() {
      $sum = 0;
      for($i = 1; $i < 1000; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0){
          $sum += $i;  
        }
      }
      return $sum;  
    }

    function euler2() {
      $sum = 0;
      $a = 1;
      $b = 2;
      $c = 0;
      while($c < 4000000){
        $c = $a + $b;
        if ($c % 2 == 0) {
          $sum += $c;  
        }

        $a = $b;
        $b = $c;
      }
      return $sum;
    }
}
