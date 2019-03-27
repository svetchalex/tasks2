<?php
/**
 * @param $str
 *
 * @return bool
 */
function find_preg($str)
{
    $pattern = '/^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
    return (preg_match($pattern, $str) === 1);
}

/**
 * @param $str
 *
 * @return bool
 */
function find_php($str)
{
    return (filter_var($str, FILTER_VALIDATE_IP) !== false);
}

find_preg('127.0.0.1');
find_preg('255.255.255.0');
find_preg('1300.6.7.8');
find_preg('254.hzf.bar.10');
find_php('127.0.0.1');
find_php('255.255.255.0');
find_php('1300.6.7.8');
find_php('254.hzf.bar.10');