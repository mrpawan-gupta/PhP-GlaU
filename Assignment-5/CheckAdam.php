<?php
    $Number=12;

function ReverseDigits($Number)
{
	$ReverseDigits = 0;
	while ($Number > 0)
	{
		$ReverseDigits = $ReverseDigits * 10 + $Number % 10;
		$Number = (int) $Number / 10;
	}
	return $ReverseDigits;
}


function Squre($Number)
{
	return ($Number * $Number);
}

function CheckAdamNumber($Number)
{
	
	$a = Squre($Number);
	$b = Squre(ReverseDigits($Number));
	
	
	if ($a == ReverseDigits($b))
	return 0;
	return -1;
}


if (CheckAdamNumber($Number))
echo "Adam Numberber";
else
echo "Not a Adam Numberber";


?>