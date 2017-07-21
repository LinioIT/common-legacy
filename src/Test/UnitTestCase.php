<?php

declare(strict_types=1);

namespace Linio\Test;

use Nelmio\Alice\Fixtures\Loader;
use PHPUnit\Framework\TestCase;

abstract class UnitTestCase extends TestCase
{
    /**
     * @var array
     */
    protected $fixtures = [];

    public function loadFixtures($file)
    {
        $loader = new Loader();
        $this->fixtures = $loader->load($file);
    }

    public function getMockForPdo($mockedMethods = [])
    {
        return $this->createMock('Linio\Test\PDOMock', $mockedMethods);
    }
}

class PDOMock extends \PDO
{
    public function __construct()
    {
    }
}
