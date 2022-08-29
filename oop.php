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
	static $index =0 ;
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
			echo 	Cart::$index . "<br>" ;
            $this->items[Cart::$index] = new CartItem($nameItem , $num) ; 
            Cart::$index ++ ;
		}
		echo "item is added <br>" ;
	}
	public function dec ($nameItem , $num):bool{
		$flag=1;
		foreach ($this->items  as $item){
			if ($item->product===$nameItem)
			{
				
				if ($item->number < $num)break ;
				$item->number = $num ;
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
    public $ownCart  ;
    public function __construct ($n,  $ln , $i , $ag){

    	$this->name = $n; 
    	$this->age  = $ag;
    	$this->id   =$i ;
    	$this->lname=$ln ;
    	$this->ownCart = new Cart() ;
    }

    public function aboutPerson ()
    {
    	echo  "name  : ".$this->name."  ".$this->lname."<br>age:".$this->age."<br>id: ".$this->id;
    }

}


$ali = new Customer("ali" , "suleman" ,123123, 20) ;

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
if ($ali->ownCart->dec("iphone" , "10"))echo "the process is complete<br>" ;
else echo "error <br>" ;
$ali->ownCart->display() ;
if ($ali->ownCart->dec("orange" , "10"))echo "the process is complete<br>" ;
else echo "error <br>" ;
$ali->ownCart->display() ;
if ($ali->ownCart->dec("apple" , "1"))echo "the process is complete<br>" ;
else echo "error <br>" ;
$ali->ownCart->display() ;



echo '<br>' ;
echo '<br>' ;
echo '<br>' ;
echo '<br>' ;
echo '<br>' ;
echo '<br>' ;
echo '<br>' ;


