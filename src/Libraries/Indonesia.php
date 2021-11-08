<?php

namespace Friskals\Countries\Libraries;

class Indonesia implements Country
{
    public function format_nominal($value)
    {
        return number_format($value, 0, ',', '.');
    }

    public function format_currency($value)
    {
        return 'Rp ' . $this->format_nominal($value);
    }
}
