<?php

namespace App;

use Exception;

class RepeatedString {

    public function repeat(string $s,int $n) : int
    {
        Define('CHAR', 'a');
    
        if (!gettype($n) === 'integer' || !gettype($s) === 'string' || !$s || $n <= 0) {
            return 0;
        }
        if (!strcasecmp($s, CHAR)) {
            return $n;
        }
        
        $len = strlen($s);
        
        $occurrences = substr_count($s, CHAR);
        $occurrences *= floor($n / $len);
        $occurrences += substr_count(substr($s, 0, $n % $len), CHAR);
        
        return $occurrences;
    }

}