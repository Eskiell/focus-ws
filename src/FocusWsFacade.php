<?php

namespace Eskiell\FocusWs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eskiell\FocusWs\Skeleton\SkeletonClass
 */
class FocusWsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'focus-ws';
    }
}
