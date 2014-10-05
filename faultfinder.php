﻿<?php
/* set execution time to an hour */
ini_set('max_execution_time', 36000);
/* set memory limit to 1000 MB */
ini_set("memory_limit","1000M");
include "C:\\xampp\\htdocs\\sanskrit\\dev-slp.php";
include "C:\\xampp\\htdocs\\sanskrit\\function.php";
$hlplus = array_merge($hl,array("M","H"));


for($b=1;$b<2;$b++)
{
$outfile=fopen("$b.html","w+");
if ($b===0)
{
    fputs($outfile,'<b style="color:blue">This is Vowel-Vowel pattern.</b><br>');
}
if ($b===1)
{
    fputs($outfile,'<b style="color:blue">This is Vowel-Consonant-Vowel pattern.</b><br>');
}
if ($b===2)
{
    fputs($outfile,'<b style="color:blue">This is Vowel-Consonant-Consonant-Vowel pattern.</b><br>');
}
if ($b===3)
{
    fputs($outfile,'<b style="color:blue">This is Vowel-Consonant-Consonant-Consonant-Vowel pattern.</b><br>');
}
if ($b===4)
{
    fputs($outfile,'<b style="color:blue">This is Vowel-Consonant-Consonant-Consonant-Consonant-Vowel pattern.</b><br>');
}
if ($b===5)
{
    fputs($outfile,'<b style="color:blue">This is Vowel-Consonant-Consonant-Consonant-Consonant-Consonant-Vowel pattern.</b><br>');
}
if ($b===6)
{
    fputs($outfile,'<b style="color:blue">This is Start-Consonant-Consonant pattern.</b><br>');
}
if ($b===7)
{
    fputs($outfile,'<b style="color:blue">This is Consonant-Consonant-End pattern.</b><br>');
}
if ($b===8)
{
    fputs($outfile,'<b style="color:blue">This is Consonant-Consonant-Consonant-End pattern.</b><br>');
}
if ($b===9)
{
    fputs($outfile,'<b style="color:blue">This is Consonant-Consonant-Consonant-Consonant-End pattern.</b><br>');
}
if ($b===0)
{
    $pattern  = '/([aAiIuUfFxXeEoO][aAiIuUfFxXeEoO])/';
}
if ($b===1)
{
    $pattern  = '/([aAiIuUfFxXeEoO][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][aAiIuUfFxXeEoO])/';
}
if ($b===2)
{
    $pattern  = '/([aAiIuUfFxXeEoO][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][aAiIuUfFxXeEoO])/';
}
if ($b===3)
{
    $pattern  = '/([aAiIuUfFxXeEoO][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][aAiIuUfFxXeEoO])/';
}
if ($b===4)
{
    $pattern  = '/([aAiIuUfFxXeEoO][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][aAiIuUfFxXeEoO])/';
}
if ($b===5)
{
    $pattern  = '/([aAiIuUfFxXeEoO][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][aAiIuUfFxXeEoO])/';
}
if ($b===6)
{
    $pattern  = '/^([kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs])/';
}
if ($b===7)
{
    $pattern  = '/([kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs])$/';
}
if ($b===8)
{
    $pattern  = '/([kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs])$/';
}
if ($b===9)
{
    $pattern  = '/([kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs][kKgGNcCjJYwWqQRtTdDnpPbBmyrlvzSs])$/';
}

comparepatterns("MWslp.txt",$b,"PWKslp.txt");    
}

/* function comparepatterns 
 * $a is the file location of dictionary whose pattern we want to take as input (Base).
 * $b refers to the pattern we want to check. 
 * 0 - Vowel-Vowel (VV)
 * 1 - Vowel-Consonant-Vowel (VCV)
 * 2 - Vowel-Consonant-Consonant-Vowel (VCCV)
 * 3 - Vowel-Consonant-Consonant-Consonant-Vowel (VCCCV)
 * 4 - Vowel-Consonant-Consonant-Consonant-Consonant-Vowel (VCCCCV)
 * 5 - Vowel-Consonant-Consonant-Consonant-Consonant-Consonant-Vowel (VCCCCCV)
 * 6 - Start-Consonant-Consonant (^CC)
 * 7 - Consonant-Consonant-End (CC$)
 * 8 - Consonant-Consonant-Consonant-End (CCC$)
 * 9 - Consonant-Consonant-Consonant-Consonant-End (CCCC$)
 * $c is the location of dictionary file to be checked.
 */
function comparepatterns($a,$b,$c)
{
    global $outfile; global $b; global $pattern;
$file= file($a);
//$file=array_map('convert1',$file);
$vccccv=array();
foreach ($file as $value)
{
    if(preg_match($pattern,$value))
    {
//        $vccccvwords[] = $value; 
        $vccccvraw = preg_split($pattern,$value,null,PREG_SPLIT_DELIM_CAPTURE);
        $i=2;
        while($i<count($vccccvraw))
        {
            if(!in_array($vccccvraw[$i-1],$vccccv))
            {
            $vccccv=array_merge($vccccv,array($vccccvraw[$i-1]));
            }
            $i=$i+2;
        }
    }
}
$vccccv = array_unique($vccccv);
$vccccv = array_values($vccccv);
    // checking the second file.
    $file1=file($c);

    foreach ($file1 as $value)
    {
        if(preg_match($pattern,$value))
        {
            $vccccvex = preg_split($pattern,$value,null,PREG_SPLIT_DELIM_CAPTURE);        
            $i=2;
            while ($i<count($vccccvex))
            {
                if ( !in_array($vccccvex[$i-1],$vccccv ))
                {
//                    echo '<b style="color:red">'.$value." - ".$vccccvex[$i-1]."</b><br>";
                    fputs($outfile,'<b style="color:red">'.$value." - ".$vccccvex[$i-1]."</b><br>");
                }
/*                else
                {
                    echo $value." - ".$vccccvex[$i-1]."<br>";
                    fputs($outfile,$value." - ".$vccccvex[$i-1]."<br>");
                }*/
                $i=$i+2;
            }
        }
    }
}

    fclose($outfile);

?>