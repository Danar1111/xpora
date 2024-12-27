<?php

namespace App\Livewire;

use Vildanbina\LivewireWizard\WizardComponent;
use App\Models\User;
use App\Steps\NameStep;
use App\Steps\EmailStep;
use App\Steps\PasswordStep;

class RegisterWizard extends WizardComponent
{
    // My custom class property
    public User $users;
    
    /*
     * Will return App\Models\User instance or will create empty User (based on $userId parameter) 
     */
    public array $steps = [
        NameStep::class,
        EmailStep::class,
        PasswordStep::class,
    ];

    public function mode(): User
    {
        return new User();
    }
}