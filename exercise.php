<?php
function string($str)
{
    $str = array_map(function($s) {
        return $s = ucfirst( strtolower($s));
    }, explode('. ', $str));

    $str = implode('. ', $str);

    dd($str);
}