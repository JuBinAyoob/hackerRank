<?php
    class Difference
	{
		private $elements=array();
		public $maximumDifference;
	
		// Write your code here
		function __construct($e)
		{
			$this->elements=$e;
		}

		function ComputeDifference()
		{
			$c=count($this->elements);
			for($i=0;$i<$c;$i++)
			{
				if(!isset($s))
					$s=$this->elements[$i];
				else if($this->elements[$i]<$s)
					$s=$this->elements[$i];
            
				if(!isset($l))
					$l=$this->elements[$i];
				else if($this->elements[$i]>$l)
					$l=$this->elements[$i];
			}
			$this->maximumDifference=$l-$s;
		}
	
	} //End of Difference class  
     

	$N=intval(fgets(STDIN));
	$a =array_map('intval', explode(' ', fgets(STDIN)));
	$d=new Difference($a);
	$d->ComputeDifference();
	print ($d->maximumDifference);
?>