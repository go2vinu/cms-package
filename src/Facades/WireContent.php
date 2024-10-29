<?php

namespace WireContent\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WireContent\WireContent
 */
class WireContent extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \WireContent\WireContent::class;
    }
}
