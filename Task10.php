<?php
/**
 * @param $str
 *
 * @return string
 */
function find_preg($str)
{
    $result = 'не верно';
    $pattern = '/^[1-9][0-9]{5}$/';
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

    if (is_numeric($str) === true && strpos($str, '0') !== 0 && strlen($str) === 6) {
        $result = 'верно';
    }
    return $result;
}

echo find_preg('123456');
echo find_preg('234567');
echo find_preg('1234545');
echo find_preg('012344');
echo find_php('123456');
echo find_php('234567');
echo find_php('1234545');
echo find_php('012344');
