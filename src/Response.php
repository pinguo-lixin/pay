<?php
namespace fengniao\pay;

class Response
{
    protected $origin;

    public function init(array $data)
    {
        $this->origin = $data;
    }
}