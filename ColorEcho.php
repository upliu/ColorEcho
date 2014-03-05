<?php

class ColorEcho
{

    public static function info($string)
    {
        echo ColorString::getColoredString($string, 'black', 'green');
    }

    public static function warn($string)
    {
        echo ColorString::getColoredString($string, 'black', 'yellow');
    }

    public static function error($string)
    {
        echo ColorString::getColoredString($string, 'white', 'red');
    }

}
