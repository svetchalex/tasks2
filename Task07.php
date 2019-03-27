<?php
/**
 * @param $str
 *
 * @return bool
 */
function find_preg($str)
{
    $pattern = '~^[^-\.\,_][a-z0-9.-_\S]{2,}@[^-\.\,_][a-z0-9.-_\S]{2,}\.[a-z0-9.-_\S]{2,}$~';
    return (preg_match($pattern, $str) === 1);
}

/**
 * @param $str
 *
 * @return bool
 */
function find_php($str)
{
    return (filter_var($str, FILTER_VALIDATE_EMAIL) !== false);
}

find_preg('mail@mail.ru');
find_preg('aa@aa.info');
find_preg('bug@@@com.ru');
find_preg('val@val.a.a.a.a');
find_php('mail@mail.ru');
find_php('aa@aa.info');
find_php('bug@@@com.ru');
find_php('val@val.a.a.a.a');