<?php

$number= $_POST['number_entered'];

$submitbutton= $_POST['submit'];


$RandomNumber= mt_rand(1,10);


?>


<form action="" method="POST">
Guess a Number Between 1 and 10: 
<input type="text" name="number_entered" value='7'/> <br><br>

Results: 
<?php 
if ($submitbutton){

if (($number > 0) && ($number <11)){
if ($number != $RandomNumber)
{
echo "Incorrect guess. The correct number was $RandomNumber. Try again";
}
else 
{
echo "$RandomNumber is the correct guess. You got it right.";
}
}

}

?>
<br><br>
<input type="submit" name="submit" value="Search"/><br><br>
</form>