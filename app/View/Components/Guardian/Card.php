<?php

namespace App\View\Components\Guardian;

use App\Models\Guardian;
use Illuminate\View\Component;

class Card extends Component
{
    public function __construct(
        public Guardian $guardian
    )
    {
    }

    public function render()
    {
        return view('components.guardian.card');
    }
}
