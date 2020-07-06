<?php

require 'Foo.php';

use \Work\Foo; // use импортирование namespace

$foo = new Foo();

$foo->doSomething();
