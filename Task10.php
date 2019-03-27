<?php
/**
 * @param $str
 *
 * @return bool
 */
function find_preg($str)
{
    $result = false;
    $pattern = '/^[1-9][0-9]{5}$/';
    if (preg_match($pattern, $str) === 1) {
        $result = true;
    }
    return $result;
}

/**
 * @param $str
 *
 * @return bool
 */
function find_php($str)
{

    $result = false;

    if (ctype_digit($str) === true && strpos($str, '0') !== 0 && strlen($str) === 6) {
        $result = true;
    }
    return $result;
}

find_preg('123456');
find_preg('234567');
find_preg('1234545');
find_preg('012344');
find_php('123456');
find_php('234567');
find_php('1234545');
find_php('012344');
