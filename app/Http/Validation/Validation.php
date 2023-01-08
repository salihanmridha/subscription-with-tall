<?php

namespace App\Http\Validation;

use Livewire\Component;
class Validation extends Component
{

    protected function rules()
    {
        return [
            'email' => 'required|unique:subscribers|email:rfc,dns',
        ];
    }
}
