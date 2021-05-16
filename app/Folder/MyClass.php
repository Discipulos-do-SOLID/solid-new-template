<?php

namespace App\Folder;

class MyClass
{
    public function test()
    {
        $var = "This is a multi-line string.\n";
        $var .= "Hovering a string shows its length.\n";
        $var .= "The length of UTF-8 strings is counted in terms of UTF-8 characters.\n";
        $var .= "Non-UTF-8 strings length are counted in octet size.\n";
        $var .= "Because of this `\xE9` octet (\\xE9),\n";
        $var .= "this string is not UTF-8 valid, thus the `b` prefix.\n";
        dump($var);
    }
}
