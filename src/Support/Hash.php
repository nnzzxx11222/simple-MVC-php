<?php

namespace SmallMvcSystem\Support;

class Hash
{
    public static function make($value)
    {
        return password_hash($value, PASSWORD_BCRYPT,[
            'cost' => 12,
        ]);
    }

    public static function hash($value)
    {
        return sha1($value);
    }

    public static function verify($value, $hashedValue)
    {
        return password_verify($value, $hashedValue);
    }
}
