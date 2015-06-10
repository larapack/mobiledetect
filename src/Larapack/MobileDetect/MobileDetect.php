<?php namespace Larapack\MobileDetect;

use Illuminate\Support\Facades\Facade;

class MobileDetect extends Facade {

    /**
     * Get the registered component.
     *
     * @return object
     */
    protected static function getFacadeAccessor() { return 'Detection\MobileDetect'; }

}
