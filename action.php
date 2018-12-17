<!DOCTYPE html>
<html>
<body>

 <?php 
 

 
	
 	$name = $_POST["fname"];
    $min =  $_POST["quantity"];
    $max =  $_POST["1quantity"];
    $step = $_POST["Step_q"];
	$Conve =    $_POST['dropown'];
	
	
	
	
	if ($Conve == "USD-CAD")
	{
		echo "Welcome ", $name , " you want to convert ", $Conve ," the range of " , $min ,  "-", $max, " why incrementing by ", $step;
		echo '<table border = 1>
			<tr>
			<th> Amount in USD </th>
			<th> Amount in CAD </th>
			</tr> ';
	for($i = $min; $i < $max ; $i +=	$step)
	{
		$ans = $i * 1.23;
		echo '		
			<tr>
				<td>' .$i. '</td>   
				
				<td>' .$ans. '</td>
			</tr>';
			
	}
	}
		else if ($Conve == "CAD-USD")
		{
			echo "Welcome ", $name , " you want to convert ", $Conve ," the range of " , $min ,  "-", $max, " why incrementing by ", $step;
			echo '<table border = 1>
			<tr>
			<th> Amount in CAD </th>
			<th> Amount in USD </th>
			</tr> ';
			
			for($i = $min; $i < $max ; $i +=	$step)
	       {
			   $ans = $i / 1.23;
		echo '		
			<tr>
				<td>' .$i. '</td>   
				
				<td>' .$ans. '</td>
			</tr>';
		}
	}
       else if (!isset($Conve))
		   echo "please you must pick a convertion"
		   
	  
	
/*
 function get_option()
 {
	 $convert= array('USD-CAD'=>'us','CAD-USD'=> 'CAD');
	 $options= '';
	 while (list($k,$v)=each($convert))
	 
	 {
		 $options.="'<option value=".$v.'">'.$k.'</options>';
		 
	 }
	 return $opt
	 
 }

//function get_options(){
 	
	
	
//}

//if ($_GET['dropdown'] == 'USD-CAD'){
	
	//echo "you picked usd";
//}else if($_GET['drop'] == 'CAD-USD'){
	
	//echo "you picked cad";
//}
if(isset($_GET['formSubmit']) )

	{ 
	$name = $_GET["fname"];
    $min =  $_GET["quantity"];
    $max =  $_GET["1quantity"];
    $step = $_GET["Step_q"];
    $varGender = $_GET['dropdown'];
	 $errorMessage = "";
	 echo "Welcome ", $name , " you want to convert the range of " , $min ,  "-", $max, " why incrementing by ", $step;
	}
else if (!isset($_GET['formSubmit']
	 if(!isset($_GET['formGender']))
	{
	  $errorMessage .= "<li>You forgot to select your Gender!</li>";
	}

 */

    
 
 ?>

 



</body>
</html> 