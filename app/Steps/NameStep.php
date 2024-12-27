<?php

namespace App\Steps;

use Vildanbina\LivewireWizard\Components\Step;
use Illuminate\Validation\Rule;

class NameStep extends Step
{
    // Step view located at resources/views/steps/general.blade.php 
    protected string $view = 'auth.register.name-step';

    /*
     * Initialize step fields
     */
    public function mount()
    {
        $this->mergeState([
            'name' => $this->model->name??'Nama',
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
        $user->name     = $state['name'];        
        $user->save();
    }

    /*
     * Step Validation
     */
    public function validate()
    {
        return [
            [
                'state.name'     => ['required'],
            ],
            [],
            [
                'state.name'     => __(key:'Name'),
            ],
        ];
    }

    /*
     * Step Title
     */
    public function title(): string
    {
        return __('NameStep');
    }
}