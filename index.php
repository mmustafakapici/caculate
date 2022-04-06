
<?php

@$number1=$_POST['first_number'];
@$number2=$_POST['second_number'];
@$results=$_POST['calculation'];

if($results=="+")
	$ans= add($number1,$number2);
else if($results=="-")
	$ans=extraction($number1,$number2);
else if($results=="x")
	$ans=multiplication($number1,$number2);
else if($results=="/")
	$ans=divide($number1,$number2);
else if($results == "f"){
	$ans =factorial($number1);
}
else if($results == "p"){
	$ans =prime($number1);
}

else if($results == "d"){
	$ans=FindDecimalDigits($number1);
}

function add($number1,$number2){
	return $number1 + $number2;
}

function extraction($number1,$number2){
	return $number1 - $number2;
}

function multiplication($number1,$number2){
	return $number1 * $number2;
}

function divide($number1,$number2){
	return $number1 / $number2;
}


function factorial($number1)
{
	$fact = 1;   
	for ($i = 1; $i <= $number1; $i++){         
		$fact = $fact * $i;  
		}  
		return @$fact;
}

function prime($prime)
{
    for ($i = 2; $i < $prime-1; $i++) {  
      if ($prime % $i == 0) {  
      $value= True;  
      }  
}  
if (isset($value) && $value) {  
	return 'The Number '. $prime . ' is not prime';  
}  else {  
   return 'The Number '. $prime . ' is prime';  
   } 
}

function FindDecimalDigits($number1)
    {
        $number1 = (string)$number1;
        $decimalDigits = 0;
        for ($i = 0; $i < strlen($number1); $i++) {
            if ($number1[$i] == ".") {
                $decimalDigits++;
            }
        }
        return $decimalDigits;

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    #operator{
    width: 20%;
	height: 7%;
	}
	input:hover{
		border: 2px solid #BEA57D;
		color: #BEA57D;
		background-color:black;
	}
	body{
		align-items: center;
        background-color: #BEA57D;
        display: flex;
        justify-content: center;
        height: 100vh;
		color: white;
	}
	#myvalue{
		width:80%;
	}

	div{
		text-align: center;
		background-color: #080F0F;
        border-radius: 20px;
        box-sizing: border-box;
        height: 500px;
        padding: 20px;
        width: 320px;	
	}


</style>
    <title>Document</title>
</head>
<body>
	<div>
		<form method="POST" action=""> 
<h2>My Calculator</h2>
First Number:<input name="first_number" value=""><br> <br>
Other Number:<input name="second_number" value=""><br> <br>
<input id="operator" type="submit" name="calculation" value="+">
<input id="operator"  type="submit" name="calculation" value="-"> <br>
<input id="operator"  type="submit" name="calculation" value="x"> 
<input id="operator"  type="submit" name="calculation" value="/"><br>
<input id="operator"  type="submit" name="calculation" value="f"> 
<input id="operator"  type="submit" name="calculation" value="p"> <br><br>
<input id="operator"  type="submit" name="calculation" value="d"> 

<br>Result: <input id="myvalue"  type='text' value="<?php echo @$ans; ?>" readonly><br>
</form> 
	</div>
</body>
</html>