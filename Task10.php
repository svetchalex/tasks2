<?php
/**
 * @param $str
 *
 * @return bool
 */
function find_preg($str)
{
    $pattern = '/^[1-9][0-9]{5}$/';
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
    if (is_int($str)) {
        $result = ($str >= 100000
            && $str <= 999999
        );
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
