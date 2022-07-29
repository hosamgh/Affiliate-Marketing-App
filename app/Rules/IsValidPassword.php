<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Str;
class IsValidPassword implements Rule
{
    public $lengthPasses = true;

    /**
     * Determine if the Uppercase Validation Rule passes.
     *
     * @var boolean
     */


    /**
     * Determine if the Numeric Validation Rule passes.
     *
     * @var boolean
     */
    public $numericPasses = true;

    /**
     * Determine if the Special Character Validation Rule passes.
     *
     * @var boolean
     */
    public $specialCharacterPasses = true;
    public function __construct()
    {
        //
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
        $this->numericPasses = ((bool)preg_match('/[0-9]/', $value));
        $this->specialCharacterPasses = ((bool)preg_match('/^(?=.*?[0-9])(?=.*?[#?!@$%^&*-])$/', $value));

        return ( $this->numericPasses && $this->specialCharacterPasses);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        switch (true) {


            case !$this->numericPasses
                && $this->specialCharacterPasses:
                return 'The :attribute must and contain at least 1 number.';

            case !$this->specialCharacterPasses
                && $this->numericPasses:
                return 'The :attribute must contain at least 1 character.';

  
            default:
                return 'The :attribute must be at least 8 characters.';
        }
    }
}
