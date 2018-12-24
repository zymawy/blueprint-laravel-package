<?php namespace Zymawy\Sms2Net\Facades;

use Illuminate\Support\Facades\Facade;

class Sms2NetFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Sms2Net';
    }
}
