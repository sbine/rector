<?php

namespace Rector\Php73\Tests\Rector\BinaryOp\IsCountableRector\Fixture;

function isCountable()
{
    is_array($foo) || $foo instanceof \Countable;
}

?>
-----
<?php

namespace Rector\Php73\Tests\Rector\BinaryOp\IsCountableRector\Fixture;

function isCountable()
{
    is_countable($foo);
}

?>
