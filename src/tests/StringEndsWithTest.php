<?php

namespace Fox\Practice\tests;

use PHPUnit\Framework\TestCase;
use Fox\Practice\practice_01\StringsEndsWith;

class StringEndsWithTest extends TestCase
{
    public function testFixedTests()
    {
        // Instancia de clase para obtener método solution
        $stringsEndsWith = new StringsEndsWith();

        $this->assertSame(true, $stringsEndsWith->solution("samurai", "ai"));
        $this->assertSame(false, $stringsEndsWith->solution("sumo", "omo"));
        $this->assertSame(true, $stringsEndsWith->solution("ninja", "ja"));
        $this->assertSame(true, $stringsEndsWith->solution("sensei", "i"));
        $this->assertSame(false, $stringsEndsWith->solution("samurai", "ra"));
        $this->assertSame(false, $stringsEndsWith->solution("abc", "abcd"));
        $this->assertSame(true, $stringsEndsWith->solution("abc", "abc"));
        $this->assertSame(true, $stringsEndsWith->solution("abcabc", "bc"));
        $this->assertSame(false, $stringsEndsWith->solution('ails', 'fails'));
        $this->assertSame(true, $stringsEndsWith->solution('fails', 'ails'));
        $this->assertSame(false, $stringsEndsWith->solution('this', 'fails'));
        $this->assertSame(true, $stringsEndsWith->solution('yes this will pass', ''));
        $this->assertSame(false, $stringsEndsWith->solution('this will not pass', '`^$<>()[]*|'));
        $this->assertSame(false, $stringsEndsWith->solution("abc\n", 'abc'), 'Watch out for \n in the end');
    }
}
