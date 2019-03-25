<?php
/**
 * @param $str
 *
 * @return string
 */
function find_preg($str)
{
    $result = 'не верно';
    $pattern = '/^[a-f 0-9]{8}\-[a-f 0-9]{4}\-[a-f 0-9]{4}\-[a-f 0-9]{4}\-[a-f 0-9]{12}$|
    \{[a-f 0-9]{8}\-[a-f 0-9]{4}\-[a-f 0-9]{4}\-[a-f 0-9]{4}\-[a-f 0-9]{12}\}$/i';
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
    $result = 'верно';
    if (strpos($str, '{') === 0) {
        $str = trim($str, '{');
        $str = trim($str, '}');
    }
    $arr = explode('-', $str);
    if(strlen($arr[0])!==8||strlen($arr[1])!==4||strlen($arr[2])!==4||strlen($arr[3])!==4||strlen($arr[4])!==12){
        $result = 'не верно';
    }
    foreach ($arr as $item) {
        $item = '0x' . $item;
        if (filter_var($item, FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_HEX) === false) {
            $result = 'не верно';
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
