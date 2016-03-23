<?php

namespace CarnegieLearning\Composer\Tests;

class LocalDevPluginTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Composer
     */
    protected $composer;

    /**
     * @var IOInterface
     */
    protected $io;

    /**
     * @var LocalDevPlugin
     */
    protected $fixture;

    protected function setUp()
    {
        parent::setUp();
        $this->composer = $this->prophesize('Composer\Composer');
        $this->io = $this->prophesize('Composer\IO\IOInterface');

        $this->fixture = new LocalDevPlugin();
        $this->fixture->activate(
            $this->composer->reveal(),
            $this->composer->io->reveal()
        );
    }
}
