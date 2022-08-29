<?php 


/*


		====================
		#                  #
		#   OOP PROJECT    #
		#				   #	
        ====================



*/

class CartItem {
	public $product ;
	public $number  ;

	public function __construct ($p , $n){
		$this->product = $p ;
		$this->number = $n ;
	}

}

class Cart{

	protected $items=[] ;
	public $index =0 ;
	public function addItem ($nameItem , $num){
        $flag=1;
		foreach ($this->items  as $item){
			if ($item->product===$nameItem)
			{
				$flag=0; 
				$item->number += $num ;
				break ;
			}
		}
		if ($flag){
			echo 	$this->index . "<br>" ;
            $this->items[$this->index] = new CartItem($nameItem , $num) ; 
            $this->index ++ ;
		}
		echo "item is added <br>" ;
	}
	public function delete ($nameItem , $num):bool{
		$flag=1;
		foreach ($this->items  as $item){
			if ($item->product===$nameItem)
			{
				
				if ($item->number < $num)break ;
				$item->number -= $num ;
				$flag=0; 
				break; 
			}
		}
		if ($flag)return 0 ;
		else return 1 ;

	}
	public function display (){
		echo "list :  <br>" ;
		foreach ($this->items as $item){
             echo $item->product . " " . $item->number   . "<br>" ;
		}

	}

}
class Customer {

	protected $name  ;
	protected $lname  ;
	protected $id  ;
	protected $age  ;
	protected $password;
    public    $ownCart  ;
    public function __construct ($n,  $ln , $i , $ag , $pas){

    	$this->name = $n; 
    	$this->age  = $ag;
    	$this->id   =$i ;
    	$this->lname=$ln ;
    	$this->ownCart = new Cart() ;
    	$this->password=sha1($pas) ;
    }

    public function aboutPerson ()
    {
    	echo  "name  : ".$this->name."  ".$this->lname."<br> password : ". $this->password ."<br> age:" . 
    	$this->age ."<br>id: ".$this->id;
    	echo '<br>' ;
		echo '<br>' ;
		echo '<br>' ;
    	$this->ownCart->display() ;
    	echo '<br>' ;
		echo '<br>' ;
		echo '<br>' ;

    }

}


$ali = new Customer("ali" , "suleman" ,123123, 20 , "ali@123") ;

echo  '<pre>' ;
var_dump($ali);
echo '</pre>' ;
echo '<br>' ;
echo '<br>' ;
echo '<br>' ;
echo '<br>' ;
echo '<br>' ;
echo '<br>' ;
echo '<br>' ;

$ali->ownCart->addItem("iphone" , 11) ;

$ali->ownCart->addItem("iphone" , 20) ; 

$ali->ownCart->addItem("apple" , 2) ;

$ali->ownCart->addItem("orange" , 1) ; 


$ali->ownCart->display() ;

if ($ali->ownCart->delete("iphone" , "10"))echo "the process is complete<br>" ;
else echo "error <br>" ;
$ali->ownCart->display() ;

if ($ali->ownCart->delete("orange" , "10"))echo "the process is complete<br>" ;
else echo "error <br>" ;
$ali->ownCart->display() ;

if ($ali->ownCart->delete("apple" , "1"))echo "the process is complete<br>" ;
else echo "error <br>" ;

$ali->ownCart->display() ;




echo '<br>' ;
echo '<br>' ;


$ali->aboutPerson() ;

echo '<br>' ;
echo '<br>' ;
echo '<br>' ;
echo '<br>' ;
echo '<br>' ;


