<?php

namespace App;

class RepeatedString {

    public function repeat(string $s,int $n) : int
    {
        $newArr = str_split($s);

        $finalArr = [];
        $count = 0;
        $index = 0;

        while ($count < $n) {
            if($index == count($newArr)) {
                $index = 0;
            }

            if($index < $n) {
                array_push($finalArr, $newArr[$index]);
            } 
            
            $index++;
            $count++;
        }   
            
        $pattern = '/a/';
        $result = join($finalArr);
        $numOfa = preg_match_all($pattern, $result);

        return $numOfa;
    }

}