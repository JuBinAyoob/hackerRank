<?php

    $handle = fopen ("php://stdin","r");
    fscanf($handle,"%d",$n);
    $bn=decbin($n);
    $set=0;
    $bn='0'.$bn;
    $len=strlen($bn);
    for($i=1,$k=0;$i<=$len;$i++)
    {   
        
        if($bn[$i]=='1')
            $k++;
        else
        {
            if($set<$k)
                $set=$k;
            $k=0;
        }
        
    }
    echo $set;
?>
