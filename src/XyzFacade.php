<?php

namespace Bagaskarawg\Xyz;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bagaskarawg\Xyz\Skeleton\SkeletonClass
 */
class XyzFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'xyz';
    }
}
