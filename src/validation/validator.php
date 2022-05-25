<?php
namespace SmallMvcSystem\validation;

use SmallMvcSystem\validation\Message;
use SmallMvcSystem\validation\Rules\MaxRule;
use SmallMvcSystem\validation\Rules\RequiredRule;
use SmallMvcSystem\validation\Rules\AlphaNumericalRule;

class validator {

    protected array $data = [];
    protected array $rules = [];
    protected array $alias = [];
  
    protected ErrorBag $errorBag;

    public function make($data){

        $this->data= $data;
        $this->errorBag = new ErrorBag;
        $this->validate();
    }

    protected function validate(){

        foreach($this->rules as $field=>$rules){

            foreach(RulesResolver::make($rules) as $rule){


                $this->applyRule($field,$rule);
         
            }

        }

    }
   
    protected function applyRule($field,$rule){
              if(is_string($rule)){
                   
                $rule=new $this->ruleMap[$rule];
                var_dump($rule);exit;
               }
                if(!$rule->apply($field,$this->getFieldValue($field),$this->data)){
                    $this->errorBag->add($field,Message::generate($rule,$this->alias($field)));
                    
                };

    }
    public function getFieldValue($field){

        return $this->data[$field] ?? null;
    }
    public function setRules($rules){

        $this->rules=$rules;

    }
    public function passes(){

        return !empty($this->errors());
    }

    public function errors($key = null){

        return $key?$this->errorBag->errors[$key]: $this->errorBag->errors;

    }
    public function alias($field){

        return $this->alias[$field] ?? $field;
    }
    
    public function setAliases(array $aliases)
    {
        $this->aliases = $aliases;
    }
}
