<?php
/**
 * @param $str
 *
 * @return string
 */
function find_preg($str)
{
    $result = 'не верно';
    $pattern = '/^abcdefghsf\^dsdsbBBo\*18340$/';
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
    $pattern = 'abcdefghsf^dsdsbBBo*18340';
    if ($pattern === $str) {
        $result = 'верно';
    }
    return $result;
}

find_preg('abcdefghsf^dsdsbBBo*18340');
find_preg('abcsdfghdfhsrtjhtrt18340');
find_php('abcdefghsf^dsdsbBBo*18340');
find_php('abcsdfghdfhsrtjhtrt18340');