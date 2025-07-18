<?php

function addSpaceBetweenNumbers($number)
{
    return strrev(implode(" ", str_split(strrev($number), 4)));
}

function convertToUnsignedUppercase($string)
{
    $charMap = [
        'À' => 'A',
        'Á' => 'A',
        'Ả' => 'A',
        'Ã' => 'A',
        'Ạ' => 'A',
        'Ă' => 'A',
        'Ằ' => 'A',
        'Ắ' => 'A',
        'Ẳ' => 'A',
        'Ẵ' => 'A',
        'Ặ' => 'A',
        'Â' => 'A',
        'Ầ' => 'A',
        'Ấ' => 'A',
        'Ẩ' => 'A',
        'Ẫ' => 'A',
        'Ậ' => 'A',
        'Đ' => 'D',
        'È' => 'E',
        'É' => 'E',
        'Ẻ' => 'E',
        'Ẽ' => 'E',
        'Ẹ' => 'E',
        'Ê' => 'E',
        'Ề' => 'E',
        'Ế' => 'E',
        'Ể' => 'E',
        'Ễ' => 'E',
        'Ệ' => 'E',
        'Ì' => 'I',
        'Í' => 'I',
        'Ỉ' => 'I',
        'Ĩ' => 'I',
        'Ị' => 'I',
        'Ò' => 'O',
        'Ó' => 'O',
        'Ỏ' => 'O',
        'Õ' => 'O',
        'Ọ' => 'O',
        'Ô' => 'O',
        'Ồ' => 'O',
        'Ố' => 'O',
        'Ổ' => 'O',
        'Ỗ' => 'O',
        'Ộ' => 'O',
        'Ơ' => 'O',
        'Ờ' => 'O',
        'Ớ' => 'O',
        'Ở' => 'O',
        'Ỡ' => 'O',
        'Ợ' => 'O',
        'Ù' => 'U',
        'Ú' => 'U',
        'Ủ' => 'U',
        'Ũ' => 'U',
        'Ụ' => 'U',
        'Ư' => 'U',
        'Ừ' => 'U',
        'Ứ' => 'U',
        'Ử' => 'U',
        'Ữ' => 'U',
        'Ự' => 'U',
        'Ỳ' => 'Y',
        'Ý' => 'Y',
        'Ỷ' => 'Y',
        'Ỹ' => 'Y',
        'Ỵ' => 'Y'
    ];
    $upperString = mb_strtoupper($string, 'UTF-8');

    return strtr($upperString, $charMap);
}