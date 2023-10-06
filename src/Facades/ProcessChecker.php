<?php

namespace Elminson\ProcessChecker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elminson\ProcessChecker\ProcessChecker
 */
class ProcessChecker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Elminson\ProcessChecker\ProcessChecker::class;
    }
}
