<?php
header( 'content-type: text/html; charset=utf-8' );
/**
 * Class1 short summary.
 *
 * Class1 description.
 *
 * @version 1.0
 * @author Math
 */


class Class1
{
    public static function l($lp,$pa,$nomDePage)
    {
        if(isset($lp))
        {
            if($lp==$pa)
                echo "<b>".utf8_decode($nomDePage)."</b>";
            else
                echo utf8_decode($nomDePage);
        }
        else
            echo utf8_decode($nomDePage);
    }
    
}