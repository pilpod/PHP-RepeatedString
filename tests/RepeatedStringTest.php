<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\RepeatedString;

class RepeatedStringTest extends TestCase {

    function test_the_string_has_seven_a()
    {
        $s = 'aba';
        $n = 10;
        $repeatedString = new RepeatedString;

        $result = $repeatedString->repeat($s, $n);

        $this->assertEquals(7, $result);
    }

    function test_the_string_has_milion_a()
    {
        $s = 'a';
        $n = 1000000;
        $repeatedString = new RepeatedString;

        $result = $repeatedString->repeat($s, $n);

        $this->assertEquals(1000000, $result);
    }

    function test_the_string_has_maximum_a()
    {
        $s = 'a';
        $n = 1000000000000;
        $repeatedString = new RepeatedString;

        $result = $repeatedString->repeat($s, $n);

        $this->assertEquals(1000000000000, $result);
    }

}