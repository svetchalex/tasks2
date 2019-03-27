<?php

/**
 * @param $str
 *
 * @return string
 */
function find_preg($str)
{
    $result = false;
    $pattern = '/^[a-f0-9]{2}\:[a-f0-9]{2}\:[a-f0-9]{2}\:[a-f0-9]{2}\:[a-f0-9]{2}\:[a-f0-9]{2}$/i';
    if (preg_match($pattern, $str) === 1) {
        $result = true;
    }
    return $result;
}

find_preg('01:32:54:67:89:AB');
find_preg('aE:dC:cA:56:76:54');
find_preg('01:33:47:65:89:ab:cd');
find_preg('01:23:45:67:89:Az');