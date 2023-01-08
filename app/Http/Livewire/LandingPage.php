<?php

namespace App\Http\Livewire;

use App\Http\Validation\Validation;
use App\Models\Subscriber;
class LandingPage extends Validation
{
    public $email;
    public $msg;

    // protected $rules = [
    //     'email' => 'required|unique:subscribers|email:rfc,dns',
    // ];

    public function subscribe()
    {
      $this->validate();
      Subscriber::create(["email" => $this->email]);
      $this->reset("email");
      $this->msg = "We will send you a confirmation email.";
    }

    /**
     * [render description]
     */
    public function resetvalidationErrors()
    {
      $this->resetValidation();
    }

    /**
     * [render description]
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.landing-page');
    }
}
