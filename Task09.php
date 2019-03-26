<?php
/**
 * @param $str
 *
 * @return string
 */
function find_preg($str)
{
    $result = 'не верно';
    $pattern = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/';
    if (preg_match($pattern, $str) === 1) {
        $result = 'верно';
    }
    return $result;
}

find_preg('C00l_Pass');
find_preg('SupperPas1');
find_preg('Cool_pass');
find_preg('C00l');
