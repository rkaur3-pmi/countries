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
}
