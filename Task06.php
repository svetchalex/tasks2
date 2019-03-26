<?php
/**
 * @param $str
 *
 * @return string
 */
function find_preg($str)
{
    $result = 'не верно';
    $pattern = '~^(0[1-9]|[12][0-9]|3[01])\/0[1-9]|1[0-2]\/[1-9][6-9][0-9][0-9]$~';
    if (preg_match($pattern, $str) === 1) {
        $result = 'верно';
    }
    return $result;
}

/**
 * @param $str
 *
 * @return string
 */
function find_php($str)
{
    $result = 'не верно';
    $arr = explode('/', $str);
    if (count($arr) === 3 && $arr[0] < 32 && $arr[1] < 13 && $arr[2] > 1599 && $arr[2] < 10000 && strlen($arr[0]) === 2
        && strlen($arr[1]) === 2 && strlen($arr[2]) === 4 && checkdate($arr[1], $arr[0], $arr[2])) {
        $result = 'верно';
    }
    return $result;
}

find_preg('29/02/2000');
find_preg('11/12/1688');
find_preg('30-04-2003');
find_preg('1/1/1899');
echo find_php('29/02/2000');
find_php('11/12/1688');
find_php('30-04-2003');
find_php('1/1/1899');