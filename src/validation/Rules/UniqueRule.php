<?php
namespace SmallMvcSystem\validation\Rules;

use SmallMvcSystem\validation\Rules\Contract\Rule;
class UniqueRule implements Rule{

protected $table;
protected $column;

public function __construct($table,$column)
{
    $this->table=$table;
    $this->column=$column;
}

public function apply($field, $value, $data)
{
    #database query
    
}
public function __toString()
{
    return "This %s is already taken";
}
}