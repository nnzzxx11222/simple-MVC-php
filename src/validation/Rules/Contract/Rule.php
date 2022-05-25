<?php 
namespace SmallMvcSystem\validation\Rules\Contract;

interface Rule {

    public function apply($field,$value,$data) ; 
    public function __tostring();

}