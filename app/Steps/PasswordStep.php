<?php

namespace App\Steps;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Vildanbina\LivewireWizard\Components\Step;
use Illuminate\Validation\Rule;

class PasswordStep extends Step
{
    // Step view located at resources/views/steps/general.blade.php 
    protected string $view = 'auth.register.password-step';

    /*
     * Initialize step fields
     */
    public function mount()
    {
        $this->mergeState([
            'password' => $this->model->password??'',
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
        $user = User::create([
            'name' => $state['name'],
            'email' => $state['email'],
            'password' => Hash::make($state['password']),
        ]);
    }

    /*
     * Step Validation
     */
    public function validate()
    {
        return [
            [
                'state.password'     => ['required'],
            ],
            [],
            [
                'state.password'     => __('Password'),
            ],
        ];
    }

    /*
     * Step Title
     */
    public function title(): string
    {
        return __('PasswordStep');
    }
}