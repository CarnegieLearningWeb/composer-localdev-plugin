<?php

namespace CarnegieLearning\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class CanonicalLockPlugin implements PluginInterface
{

    /**
     * @var Composer $composer
     */
    protected $composer;

    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
    }
}
