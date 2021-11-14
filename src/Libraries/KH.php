<?php

namespace Friskals\Countries\Libraries;

class KH implements Country
{
    public function format_nominal($value)
    {
        return round($value, 2);
    }

    public function format_currency($value)
    {
        return '$ ' . number_format($value, 2, ',', '.');;
    }

    public function validate_phone($phone)
    {
        return preg_match('/^(\+855)[0-9]{8,13}$/', $phone);
    }

    public function transform_phone($phone)
    {
        if (starts_with($phone, '+855')) {
            $phone = (substr($phone, 4, 1) == '0' ? '+855' . substr($phone, 5) : $phone);
        } elseif (starts_with($phone, '855')) {
            $phone = (substr($phone, 3, 1)=='0' ? '+855'.substr($phone, 4) : '+'.$phone);
        }

        return $phone;
    }
}
