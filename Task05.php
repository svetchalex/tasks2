<?php
/**
 * @param $str
 *
 * @return string
 */
function find_preg($str)
{
    $result = 'не верно';
    $pattern = '/^\#[a-f0-9]{6}$/i';
    if (preg_match($pattern, $str) === 1) {
        $result = 'верно';
    }
    return $result;
}



find_preg('#FFFFFF');
find_preg('#00ffFF');
find_preg('232323');
find_preg('f#fddee');
