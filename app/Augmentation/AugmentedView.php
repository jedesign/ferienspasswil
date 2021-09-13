<?php

namespace App\Augmentation;

use Edalzell\Blade\Concerns\AugmentsValues;
use Illuminate\View\View;
use Statamic\Statamic;

class AugmentedView extends View
{
    use AugmentsValues;

    public function gatherData(): array
    {
        $variables = parent::gatherData();
        if (!$this->isStatamicRoute($variables)) {
            return $variables;
        }

        if (Statamic::isCpRoute()) {
            return $variables;
        }

        $marco = array_map(function ($data) {
        $augmented =$this->getAugmentedValue($data);
        if($data instanceof \App\Models\Course) {
            ray($data,$augmented);
        }
            return $augmented;
        }, $variables);
        return $marco;
    }

    private function isStatamicRoute(array $variables): bool
    {
        return isset($variables['cp_url']);
    }
}
