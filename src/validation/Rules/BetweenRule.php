<?php 
namespace SmallMvcSystem\validation\Rules;


use SmallMvcSystem\validation\Rules\Contract\Rule;

class BetweenRule implements Rule {

    protected int $min;
    protected int  $max;

    public function __construct(int $min,int $max)
    {
        $this->min=$min;
        $this->max=$max;
    }
    public function apply($field,$value,$data){
        if( strlen($value) < $this->min ){
            
            return false;
        }  
        if( strlen($value) > $this->max ){
            
            return false;
        }
        return true ;
    }
    public function __tostring()
    {
        return "%s must be between {$this->min} and {$this->max} characters";
    }
}