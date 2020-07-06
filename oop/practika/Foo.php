<?php

namespace Work;

use DateTime;

class Foo
{
    public function doSomething()
    {
        echo "Hi Foo!\n";

        $dt = new DateTime();
        echo $dt->getTimestamp() . "\n";
    }
}
