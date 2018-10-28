<?php

namespace FormComponent\FormComponent\Facades;

use Illuminate\Support\Facades\Facade;

class FormComponent extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'formcomponent';
    }
}
