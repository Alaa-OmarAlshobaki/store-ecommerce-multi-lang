<?php

namespace App\Rules;

use App\Models\Option;
use Illuminate\Contracts\Validation\Rule;

class OptionValid implements Rule
{
    private $id;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id=$id;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if($this->id)
        $attribute=Option::where('id',$this->id)->first();
      
      
        if ($attribute)
        return true;
    else
        return false;
      
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error on option id.';
    }
}
