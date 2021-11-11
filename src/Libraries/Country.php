<?php

namespace Friskals\Countries\Libraries;

interface Country
{
    public function format_nominal($value);

    public function format_currency($value);

    public function validate_phone($phone);

    public function transform_phone($phone);
}
