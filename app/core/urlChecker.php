<?php
class urlChecker
{
    public static function check()
    {
        $url =  $_SERVER['REQUEST_URI'];
        $toParse = parse_url($url);
        $parsedToSlash = explode('/', trim($toParse['path'], '/'));

        $i = 0;
        while($i <= count($parsedToSlash))
        {
            echo'../';
            $i++;
        }
    }
}