<?php
/**
 * @param $str
 *
 * @return bool
 */
function find_preg($str)
{
    $pattern = '~^(https?\:\/\/)?(www\.)?[a-z0-9]{2,}\.[a-z0-9]{2,}(\.|\/)[a-z0-9\-\.]{2,}~';
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
    if (filter_var($str, FILTER_VALIDATE_URL) !== false ||
        filter_var('http://' . $str, FILTER_VALIDATE_URL) !== false) {
        $result = true;
    }
    return $result;
}

find_preg('http://www.zcontest.ru');
find_preg('zcon.com/index.html#bookmark');
find_preg('http://a.com');
find_preg('http://www.domain-.com ');
find_php('http://www.zcontest.ru');
find_php('zcon.com/index.html#bookmark');
find_php('http://a.com');
find_php('http://www.domain-.com ');