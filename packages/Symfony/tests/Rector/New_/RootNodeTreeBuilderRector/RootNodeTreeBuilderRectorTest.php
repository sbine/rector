<?php

declare(strict_types=1);

namespace Rector\Symfony\Tests\Rector\New_\RootNodeTreeBuilderRector;

use Iterator;
use Rector\Symfony\Rector\New_\RootNodeTreeBuilderRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class RootNodeTreeBuilderRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideDataForTest(): Iterator
    {
        yield [__DIR__ . '/Fixture/fixture.php.inc'];
        yield [__DIR__ . '/Fixture/fixture2.php.inc'];
    }

    protected function getRectorClass(): string
    {
        return RootNodeTreeBuilderRector::class;
    }
}
