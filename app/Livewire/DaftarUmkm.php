<?php

namespace App\Livewire;

use Vildanbina\LivewireWizard\WizardComponent;
use App\Models\User;

class UserWizard extends WizardComponent
{
    // My custom class property
    public $userId;
    
    /*
     * Will return App\Models\User instance or will create empty User (based on $userId parameter) 
     */
    public function model()
    {
        return User::findOrNew($this->userId);
    }
}