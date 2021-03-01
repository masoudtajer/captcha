<?php

namespace Masoud5070\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Masoud5070\Captcha\Captcha
 */
class Captcha extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'captcha';
    }
}
