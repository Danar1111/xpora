<?php

namespace App\Steps;

use Vildanbina\LivewireWizard\Components\Step;
use Illuminate\Validation\Rule;

class EmailStep extends Step
{
    // Step view located at resources/views/steps/general.blade.php 
    protected string $view = 'auth.register.email-step';

    /*
     * Initialize step fields
     */
    public function mount()
    {
        $this->mergeState([
            'email'                  => $this->model->email?? '',
        ]);
    }
    
    /*
    * Step icon 
    */
    /*
     * When Wizard Form has submitted
     */
    public function save($state)
    {
        $user = $this->model;
        $user->email = $state['email'];        
        $user->save();
    }

    /*
     * Step Validation
     */
    public function validate()
    {
        return [
            [
                'state.email'     => ['required',Rule::unique('users', 'email')]
            ],
            [],
            [
                'state.email'     => __(key:'Email'),
            ],
        ];
    }

    /*
     * Step Title
     */
    public function title(): string
    {
        return __('EmailStep');
    }
}