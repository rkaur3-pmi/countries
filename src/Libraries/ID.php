<?php

namespace Friskals\Countries\Libraries;

class ID implements Country
{
    public function format_nominal($value)
    {
        return intval($value);
    }

    public function format_currency($value)
    {
        return 'Rp ' . number_format($value, 0, ',', '.');
    }

    public function validate_phone($phone)
    {
        return preg_match('/^(\+62)[0-9]{9,13}$/', $phone);
    }

    public function transform_phone($phone)
    {
        if (starts_with($phone, '+62')) {
            $phone =  (substr($phone, 3, 1) == '0' ? '+62' . substr($phone, 4) : $phone);
        } elseif (starts_with($phone, '62')) {
            $phone = (substr($phone, 2, 1) == '0' ? '+62' . substr($phone, 3) : '+' . $phone);
        } else {
            $phone  = '+62' . substr($phone, 1);
        }

        return $phone;
    }
}
