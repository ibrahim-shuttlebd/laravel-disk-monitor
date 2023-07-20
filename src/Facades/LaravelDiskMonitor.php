<?php

namespace Ibrahimshuttlebd\LaravelDiskMonitor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ibrahimshuttlebd\LaravelDiskMonitor\LaravelDiskMonitor
 */
class LaravelDiskMonitor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ibrahimshuttlebd\LaravelDiskMonitor\LaravelDiskMonitor::class;
    }
}
