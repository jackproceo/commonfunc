<?php

namespace jackproceo\commonfunc;

class commonfunc
{
    public static function gencode($tobe, $num)
    {
        $tmpl = strlen($tobe);
        $tmp0 = "";
        for ($i = 1; $i <= $num - $tmpl; $i = $i + 1) {

            $tmp0 = $tmp0 . "0";
        }

        $function_ret = $tmp0 . $tobe;

        return $function_ret;
    }

    public static function converthtml($str)
    {
        $str = trim($str);
        $str = str_replace("<", "&lt;", $str);
        $str = str_replace(">", "&gt;", $str);
        $str = str_replace(" ", "&nbsp;", $str);
        $str = str_replace("&#8216;", "'", $str);

        $str = str_replace(chr(34), "&quot;", $str);

        $str = str_replace("\n\r", "<br>", $str);
        $str = str_replace("\n", "<br>", $str);

        return $str;
    }
    public static    function e($str)
    {
        echo "$str<br>\n";
    }

    public static  function eemail($str)
    {
        echo "<a href='mailto:$str' target=_blank>$str</a>";
    }
    public static  function eurl($str)
    {
        echo "<a href='$str' target=_blank>$str</a><br />\n";
    }

    public static function jshow($vars, $label = '', $return = false)   
    {   
        if (ini_get('html_errors')) {   
            $content = "<pre>\n";   
            if ($label != '') {   
                $content .= "<strong>{$label} :</strong>\n";   
            }   
            $content .= htmlspecialchars(print_r($vars, true));   
            $content .= "\n</pre>\n";   
        } else {   
            $content = $label . " :\n" . print_r($vars, true);   
        }   
        if ($return) { return $content; }   
        echo $content;   
        return null;   
    }  




}
