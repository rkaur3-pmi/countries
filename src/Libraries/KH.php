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
}
