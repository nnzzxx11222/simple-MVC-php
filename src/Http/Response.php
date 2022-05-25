<?php
namespace SmallMvcSystem\Http;


class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function back()
    {
        var_dump(header('Location:' . $_SERVER['HTTP_REFERER']));die;

        return $this;
    }
}
