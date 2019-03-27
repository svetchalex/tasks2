<?php
/**
 * @param $str
 *
 * @return bool
 */
function find_preg($str)
{
    $pattern = '/^[a-f0-9]{8}\-[a-f0-9]{4}\-[a-f0-9]{4}\-[a-f0-9]{4}\-[a-f0-9]{12}|
    \{[a-f0-9]{8}\-[a-f0-9]{4}\-[a-f0-9]{4}\-[a-f0-9]{4}\-[a-f0-9]{12}\}$/i';
    return (preg_match($pattern, $str) === 1);
}

/**
 * @param $str
 *
 * @return bool
 */
function find_php($str)
{
    $result = true;
    if (strpos($str, '{') === 0) {
        $str = trim($str, '{');
        $str = trim($str, '}');
    }
    $arr = explode('-', $str);
    [$str1, $str2, $str3, $str4, $str5] = $arr;
    if (strlen($str1) !== 8
        || strlen($str2) !== 4
        || strlen($str3) !== 4
        || strlen($str4) !== 4
        || strlen($str5) !== 12
    ) {
        $result = false;
    }
    foreach ($arr as $item) {
        $item = '0x' . $item;
        if (filter_var($item, FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_HEX) === false) {
            $result = false;
            break;
        }
    }
    return $result;
}

find_preg('e02fa0e4-01ad-090A-c130-0d05a0008ba0');
find_preg('{e02fa0e4-01ad-090A-c130-0d05a0008ba0}');
find_preg('e02fa0e4-01ad-090A-c130-0d05a0008ba0}');
find_preg('e02fa0e401ad090Ac1300d05a0008ba0');
find_php('e02fa0e4-01ad-090A-c130-0d05a0008ba0');
find_php('{e02fa0e4-01ad-090A-c130-0d05a0008ba0}');
find_php('e02fa0e4-01ad-090A-c130-0d05a0008ba0}');
find_php('e02fa0e401ad090Ac1300d05a0008ba0');
