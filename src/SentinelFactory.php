<?php

namespace Kohana\Sentinel;

use Cartalyst\Sentinel\Native\Facades\Sentinel;

class SentinelFactory
{
    /**
     * @return \Cartalyst\Sentinel\Sentinel
     */
    public static function create()
    {
        $sentinel = new Sentinel;

        return $sentinel->getSentinel();
    }
}
