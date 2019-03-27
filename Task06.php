<?php
/**
 * @param $str
 *
 * @return bool
 */
function find_preg($str)
{
    $pattern = '~^(0[1-9]|[12][0-9]|3[01])\/0[1-9]|1[0-2]\/(1[6-9]|[2-9][0-9])[0-9][0-9]$~';
    return (preg_match($pattern, $str) === 1);
}

/**
 * @param $str
 *
 * @return bool
 */
function find_php($str)
{
    $result = false;
    $arr = explode('/', $str);
    [$day, $month, $year] = $arr;
    if (count($arr) === 3) {
        $result = (checkdate($month, $day, $year)
            && $year > 1599
            && $year < 10000
            && strlen($day) === 2
            && strlen($month) === 2
        );
    }
    return $result;
}

find_preg('29/02/2000');
find_preg('11/12/1688');
find_preg('30-04-2003');
find_preg('1/1/1899');
find_php('29/02/2000');
find_php('11/12/1688');
find_php('30-04-2003');
find_php('1/1/1899');