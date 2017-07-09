<?php
    function factorial($n)
    { 
          if($n==1 || $n==0)
              return 1;
          else
              return ($n*factorial($n-1));

    }
    $_fp = fopen("php://stdin", "r");
    /* Enter your code here. Read input from STDIN. Print output to STDOUT */

    fscanf($_fp,"%d",$N);

    $ans=factorial($N);
    printf("%d\n",$ans);
?>
