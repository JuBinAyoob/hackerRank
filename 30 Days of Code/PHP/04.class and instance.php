<?php
class Person{
    public $age;
   public function __construct($initialAge){
          // Add some more code to run some checks on initialAge
       if($initialAge<0)
       {
           $GLOBALS['age']=0;
           printf("Age is not valid, setting age to 0.\n");
       }
       else
           $GLOBALS['age']=$initialAge;

    }
   public  function amIOld(){
            // Do some computations in here and print out the correct statement to the console 
        if($GLOBALS['age']<13) 
            printf("You are young.\n");
        else if($GLOBALS['age']>=13 && $GLOBALS['age']<18)
            printf("You are a teenager.\n");
        else
             printf("You are old.\n");

    }
   public  function yearPasses(){
          $GLOBALS['age']=$GLOBALS['age']+1;

    }
   
      
}
$T = intval(fgets(STDIN));
 for($i=0;$i<$T;$i++){
     $age=intval(fgets(STDIN));
     $p=new Person($age);
     $p->amIOld();
     for($j=0;$j<3;$j++){
         $p->yearPasses();
     }
     $p->amIOld();
     echo "\n";
         
 }
?>
