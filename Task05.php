<?php
/**
 * @param $str
 *
 * @return bool
 */
function find_preg($str)
{
    $pattern = '/^\#[a-f0-9]{6}$/i';
    return (preg_match($pattern, $str) === 1);
}


find_preg('#FFFFFF');
find_preg('#00ffFF');
find_preg('232323');
find_preg('f#fddee');
