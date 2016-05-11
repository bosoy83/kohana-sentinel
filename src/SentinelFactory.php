<?php

namespace Kohana\Sentinel;

use Cartalyst\Sentinel\Native\SentinelBootstrapper;
use Kohana;

class SentinelFactory
{
    /**
     * @var null|array
     */
    private $config;

    public function __construct()
    {
        $this->config = Kohana::$config->load('sentinel')->get('config');
    }

    /**
     * @return \Cartalyst\Sentinel\Sentinel
     */
    public function create()
    {
        return (new SentinelBootstrapper($this->config))->createSentinel();
    }
}
