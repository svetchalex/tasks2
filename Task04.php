<?php
/**
 * @param $str
 *
 * @return string
 */
function find_preg($str)
{
    $result = 'не верно';
    $pattern = '~^(http\:\/\/|https\:\/\/){0,1}(www\.){0,1}[a-z0-9]{2,}\.[a-z0-9]{2,}(\.|\/)[a-z0-9\-\.]{2,}~';
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
    if (filter_var($str, FILTER_VALIDATE_URL) !== false |
        filter_var('http://' . $str, FILTER_VALIDATE_URL) !== false) {
        $result = 'верно';
    }
    return $result;
}

find_preg('http://www.zcontest.ru');
find_preg('zcon.com/index.html#bookmark');
find_preg('http://a.com');
find_preg('http://www.domain-.com ');
echo find_php('http://www.zcontest.ru');
echo find_php('zcon.com/index.html#bookmark');
echo find_php('http://a.com');
echo find_php('http://www.domain-.com ');