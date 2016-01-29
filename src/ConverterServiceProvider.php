<?php
namespace Tdavis\PhantomMagick;

use Illuminate\Support\ServiceProvider;

class ConverterServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('converter', function() {
            return new \Tdavis\PhantomMagick\Converter;
        });
    }
}
