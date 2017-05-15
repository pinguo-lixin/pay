<?php
namespace fengniao\pay;

class Utils
{
    public static function sign(array $data)
    {
        $key = isset($data['key']) ? $data['key'] : '';
        unset($data['key']);
        $str = '';
        foreach ($data as $k => $v) {
            $str .= $k . '=' . $v . '&';
        }
        $str .= $str . 'key=' . $key;
        return strtoupper(md5($str));
    }
}