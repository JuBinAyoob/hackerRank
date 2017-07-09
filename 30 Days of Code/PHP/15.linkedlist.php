<?php
class Node{
    public $data;
    public $next;
    function __construct($d)
    {
        $this->data = $d;
        $this->next = NULL;
    }
}
class Solution{
	    function insert($head,$data){
      //complete this method
        if($head==NULL)
        {
            $Start=new Node($data);
            $head=$Start;
        }
        else
        {
            $Start=$head;
            $nd=new Node($data);
            while($Start->next!=NULL)
                $Start=$Start->next;
            $Start->next=$nd;
        }
        return $head;
    }

	function display($head){
        $start=$head;
        while($start){
            echo $start->data,' ';
            $start=$start->next;
        }
    }
}
$T=intval(fgets(STDIN));
$head=null;
$mylist=new Solution();
while($T-->0){
    $data=intval(fgets(STDIN));
    $head=$mylist->insert($head,$data);
}
$mylist->display($head);
?>
