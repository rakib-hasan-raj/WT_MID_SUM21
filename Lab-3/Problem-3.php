<?php
$length=10;
$width=10;

$perimeter= 2*($length+$width);
echo "Perimeter of Rectangle: $perimeter<br>";

$area= ($length*$width);
echo "Area of Rectangle: $area<br>";

if($length===$width){
	echo "The shape is a square";
}
?>