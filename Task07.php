<?php
/**
 * @param $str
 *
 * @return string
 */
function find_preg($str)
{
    $result = 'не верно';
    $pattern = '~^[^-\.\,_][a-z0-9.-_\S]{2,}@[^-\.\,_][a-z0-9.-_\S]{2,}\.[a-z0-9.-_\S]{2,}$~';
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