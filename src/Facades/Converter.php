<?php
namespace Tdavis\PhantomMagick\Facades;

use Illuminate\Support\Facades\Facade;

class Converter extends Facade
{
    protected static function getFacadeAccessor() { return 'converter'; }
}
