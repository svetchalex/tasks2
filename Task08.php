<?php
/**
 * @param $str
 *
 * @return string
 */
function find_preg($str)
{
    $result = false;
    $pattern = '/^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
    if (preg_match($pattern, $str) === 1) {
        $result = true;
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
    $result = false;

    if (filter_var($str,FILTER_VALIDATE_IP)!==false) {
        $result = true;
    }
    return $result;
}

find_preg('127.0.0.1');
find_preg('255.255.255.0');
find_preg('1300.6.7.8');
find_preg('254.hzf.bar.10');
find_php('127.0.0.1');
find_php('255.255.255.0');
find_php('1300.6.7.8');
find_php('254.hzf.bar.10');