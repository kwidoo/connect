<?php

namespace Kwidoo\Connect;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kwidoo\Connect\Skeleton\SkeletonClass
 */
class ConnectFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'connect';
    }
}
