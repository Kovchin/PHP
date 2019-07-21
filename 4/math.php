<?php
class math
{
    private const PI = 3.1415926;

    public static $pi2 = self::PI ** 2;

    public static function sin($value)
    {
        return sin($value);
    }
}
