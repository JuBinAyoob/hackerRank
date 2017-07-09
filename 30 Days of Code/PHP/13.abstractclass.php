<?php
abstract class Book
{
    
    protected $title;
    protected  $author;
    
     function __construct($t,$a){
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}

//Write MyBook class

class MyBook extends Book
{
    private $price;
    function __construct($t,$a,$p){
        $this->title=$t;
        $this->author=$a;
        $this->price=$p;
    }
    public function display()
    {
        printf("Title: %s",$this->title);
        printf("Author: %s",$this->author);
        printf("Price: %d",$this->price);
    }
}

$title=fgets(STDIN);
$author=fgets(STDIN);
$price=intval(fgets(STDIN));
$novel=new MyBook($title,$author,$price);
$novel->display();

?>