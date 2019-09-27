<?php
// This Code will remove duplicate values from array 
// Author: Eshban Bahadur

$array_values = array("a","b","c","a","a","b","d");

print"<pre>";
print_r($array_values);
print"</pre>";

// This main loop will run according to the length of array
for($i=0;$i<count($array_values);$i++)
{
	$current_position = $i;
	$current_value = $array_values[$i];
		
	//Remove Duplicates from Loop //
	for($j=0;$j<count($array_values);$j++)
	{	
		if($current_position<>$j)
		{
			if($current_value==$array_values[$j])
				$array_values[$j]="";
		}		
	}	
}

// This loop will print the final array
for($final=0;$final<count($array_values);$final++)
{
	//print $array_values[$final];
}

print"<pre>";
print_r($array_values);
print"</pre>";

?>
