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

find_preg('mail@mail.ru');
find_preg('aa@aa.info');
find_preg('bug@@@com.ru');
find_preg('val@val.a.a.a.a');
find_php('mail@mail.ru');
find_php('aa@aa.info');
find_php('bug@@@com.ru');
find_php('val@val.a.a.a.a');