<?php

declare(strict_types=1);

namespace Rector\Doctrine\Tests\Rector\Class_\ManagerRegistryGetManagerToEntityManagerRector;

use Iterator;
use Rector\Doctrine\Rector\Class_\ManagerRegistryGetManagerToEntityManagerRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class ManagerRegistryGetManagerToEntityManagerRectorTest extends AbstractRectorTestCase
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
        yield [__DIR__ . '/Fixture/keep_different_methods.php.inc'];
        yield [__DIR__ . '/Fixture/do_not_remove_registry_on_non_get_repo_call.php.inc'];
    }

    protected function getRectorClass(): string
    {
        return ManagerRegistryGetManagerToEntityManagerRector::class;
    }
}
