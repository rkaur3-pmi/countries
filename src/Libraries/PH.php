<?php

namespace Friskals\Countries\Libraries;

class PH implements Country
{
    public function format_nominal($value)
    {
        return round($value, 2);
    }

    public function format_currency($value)
    {
        return '₱' . number_format($value, 2, '.', ',');;
    }

    public function validate_phone($phone)
    {
        return preg_match('/^(\+63)[0-9]{9,13}$/', $phone);
    }

    public function transform_phone($phone)
    {
        if (starts_with($phone, '+63')) {
            $phone =  (substr($phone, 3, 1) == '0' ? '+63' . substr($phone, 4) : $phone);
        } elseif (starts_with($phone, '63')) {
            $phone = (substr($phone, 2, 1) == '0' ? '+63' . substr($phone, 3) : '+' . $phone);
        } else {
            $phone  = '+63' . substr($phone, 1);
        }

        return $phone;
    }
}
