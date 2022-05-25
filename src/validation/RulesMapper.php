<?php 
namespace SmallMvcSystem\validation;

use SmallMvcSystem\validation\Rules\MaxRule;
use SmallMvcSystem\validation\Rules\BetweenRule;
use SmallMvcSystem\validation\Rules\RequiredRule;
use SmallMvcSystem\validation\Rules\AlphaNumericalRule;
use SmallMvcSystem\validation\Rules\ConfirmedRule;
use SmallMvcSystem\validation\Rules\EmailRule;
use SmallMvcSystem\validation\Rules\UniqueRule;

trait RulesMapper {

    protected static array $map=[ 
    'required'=> RequiredRule::class,
    'alnum'=> AlphaNumericalRule::class,
    'max'=>MaxRule::class,
    'between'=>BetweenRule::class,
    'email'=>EmailRule::class,
    'confirmed'=>ConfirmedRule::class,
    'unique'=> UniqueRule::class
];

    public static function resolve(string $rule,$options){

        return new static::$map[$rule](...$options);

    }
}