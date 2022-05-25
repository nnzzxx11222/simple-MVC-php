<?php 
namespace SmallMvcSystem\validation\Rules;

use SmallMvcSystem\validation\Rules\Contract\Rule;

class EmailRule implements Rule {

    public function apply ($field,$value,$data){

        return preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$value);
    }
    public function __tostring()
    {
        return "your %s is not a vallid email address";
    }
}