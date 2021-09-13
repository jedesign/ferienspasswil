<?php

namespace App\Augmentation;

class AugmentationViewFactory extends \Edalzell\Blade\Augmentation\AugmentationViewFactory
{
    protected function viewInstance($view, $path, $data)
    {
        return new AugmentedView($this, $this->getEngineFromPath($path), $view, $path, $data);
    }
}
