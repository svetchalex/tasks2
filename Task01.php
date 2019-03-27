<?php
/**
 * @param $str
 *
 * @return bool
 */
function find_preg($str)
{
    $pattern = '/^abcdefghsf\^dsdsbBBo\*18340$/';
    return (preg_match($pattern, $str) === 1);
}

/**
 * @param $str
 *
 * @return bool
 */
function find_php($str)
{
    $pattern = 'abcdefghsf^dsdsbBBo*18340';
    return ($pattern === $str);
}

find_preg('abcdefghsf^dsdsbBBo*18340');
find_preg('abcsdfghdfhsrtjhtrt18340');
find_php('abcdefghsf^dsdsbBBo*18340');
find_php('abcsdfghdfhsrtjhtrt18340');