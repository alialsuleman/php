<?php


	if ($_SERVER['REQUEST_METHOD']=='POST'){
		$user =$_POST['username']  ;  
		$email = $_POST['email']  ;
		$phone = $_POST['cellphone'] ; 
		$message = $_POST['message'] ; 


		$error = array() ;

		if (strlen($user)<=3)$error [] ='user name must be more than 3  char <br>' ;
		if (strlen($message)<=10)$error [] ='user name must be more than 10  char <br>' ;
		if (strlen($phone)<=10)$error [] ='th number phone not correct <br>' ;
		// IF no error send message ; mail(to , subject , message , HEader , parameters)
		$header = 'From:' . 'ems@gmail.com' ;
		$to     = 'example@gmail.com'
		if(empty($error)){

		mail("alialsoleman2000@gmail.com" , "contact form",  $message , $header) ;

		}
	}


?>



<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	    <div>
	    	<?php 
			if (isset($error)){
    			foreach($error as $er)echo $er ; 
			}
			?>
	    </div>
		<form  action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" >
			
			<input type="text" name="username"
			placeholder="username">
			<br>
			<input type="email" name="email"
			placeholder="email">
			<br>
			<input type="text" name="cellphone"
			placeholder="cellphone">
			<br>
			<textarea placeholder="enter you message"
			name="message"></textarea>
			<br>
			<input type="submit" name="">
		</form>
</body>
</html>








