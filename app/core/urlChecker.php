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

    public static function urlEncode($url)
    {
        $url=strtolower(trim(stripslashes($url)));

//--caractères supprimés.
        $url=str_replace(array(
            '…',
            '«',
            '«',
            '»',
            '»',
            '!',
            '?',
            '"',
            '/',
            '\\',
            ':',
            '#',
            '@',
            '§',
            '.',
            ',',
            '%',
            '<',
            '>',
            '+',
            '=',
            '¨',
            '*',
            '£',
            '`',
            '°',
            ';'
        ),'-',$url);



//--Ponctuation
        $url=str_replace(array(' ',"'",'’','(',')','_','--'),'-',$url);

//--caractères remplacés.
        $url=str_replace(array('à','â','ä','À','Á','Â','Ã','Ä'),'a',$url);
        $url=str_replace(array('ë','È','É','Ê','Ë','ê','è','é'),'e',$url);
        $url=str_replace(array('Ç','ç'),'c',$url);
        $url=str_replace(array('ï','î','Ì','Í','Î','Ï'),'i',$url);
        $url=str_replace(array('Ñ'),'n',$url);
        $url=str_replace(array('û','ü','Ù','Ú','Ü','Û'),'u',$url);
        $url=str_replace(array('Ÿ','Ý'),'y',$url);
        $url=str_replace(array('ô','ö','Ò','Ó','Ô','Õ','Ö'),'o',$url);
        $url=str_replace(array('Š','š'),'s',$url);

//--Signes
        $url=str_replace('$','dollar',$url);
        $url=str_replace('©','copyright',$url);
        $url=str_replace('®','registred',$url);
        $url=str_replace('œ','oe',$url);
        $url=str_replace('æ','ae',$url);

        $url=str_replace('&', 'et', $url);
        $url=str_replace('€','euros',$url);



//-- Adaptation
        $url = strtolower($url);
        $url = trim($url);
        $url=str_replace('--','-',$url);
        $url=str_replace('--','-',$url);

        return $url;
    }

}

?>