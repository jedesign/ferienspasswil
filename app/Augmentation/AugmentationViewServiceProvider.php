<?php

namespace App\Augmentation;

use Illuminate\View\Factory;

class AugmentationViewServiceProvider extends \Edalzell\Blade\Augmentation\AugmentationViewServiceProvider
{
    protected function createFactory($resolver, $finder, $events): Factory
    {
        return new AugmentationViewFactory($resolver, $finder, $events);
    }
}
