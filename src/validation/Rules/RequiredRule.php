<?php
namespace SmallMvcSystem\validation\Rules;

use SmallMvcSystem\validation\Rules\Contract\Rule;

class RequiredRule implements Rule{


    public function apply($field,$value,$data){

        return !empty($value);
    } 

    public function __tostring(){

        return "%s is required and cannot be empty !";
    }
}
