<?php 
namespace SmallMvcSystem\validation\Rules;

use SmallMvcSystem\validation\Rules\Contract\Rule;

class MaxRule implements Rule {

    protected int $max ;
    public function __construct(int $max)
    {
        return $this->max = $max ; 
    }
    public function apply ($field,$value,$data){

        return (strlen($value) < $this->max);

    }
    
    public function __tostring()
    {
        return "%s must be less then {$this->max}";
    }
}