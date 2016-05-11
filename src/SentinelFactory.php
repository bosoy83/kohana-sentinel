<?php

namespace Kohana\Sentinel;

use Cartalyst\Sentinel\Native\SentinelBootstrapper;
use Kohana;

class SentinelFactory
{
    /**
     * @var SentinelBootstrapper
     */
    private $bootstrapper;

    public function __construct()
    {
        $config = Kohana::$config->load('sentinel')->get('config');

        $this->bootstrapper = new SentinelBootstrapper($config);
    }

    /**
     * @return \Cartalyst\Sentinel\Sentinel
     */
    public function create()
    {
        return $this->bootstrapper->createSentinel();
    }
}
