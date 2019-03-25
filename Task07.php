<?php
/**
 * @param $str
 *
 * @return string
 */
function find_preg($str)
{
    $result = 'не верно';
    $pattern = '~^[^\-\.\,\_][\w\0-9\.\-\S]@[^-\.\,\_][\w0-9\.\-_\S]\.[^\-\.\,\_][\w\0-9\.\-\S]~';
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

    if (filter_var($str,FILTER_VALIDATE_EMAIL)!==false) {
        $result = 'верно';
    }
    return $result;
}

echo find_preg('mail@mail.ru');
echo find_preg('aa@aa.info');
echo find_preg('bug@@@com.ru');
echo find_preg('val@val.a.a.a.a');
echo find_php('mail@mail.ru');
echo find_php('aa@aa.info');
echo find_php('bug@@@com.ru');
echo find_php('val@val.a.a.a.a');