<?php

namespace Jeremeamia\PhpPatterns\Test\Creation;

use Jeremeamia\PhpPatterns\Creation\FlyweightFactoryTrait;

class FlyweightFactoryTraitFixture
{
    use FlyweightFactoryTrait;

    protected $data = [];

    protected function doCreate($name, array $context)
    {
        $class = '\\' . $name . 'Exception';
        return new $class;
    }
}
