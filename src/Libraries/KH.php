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
}
