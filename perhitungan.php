<?php
class perhitungan{
function __construct(){

	@$a = $_REQUEST['a'];
	@$b = $_REQUEST['b'];
	@$c= 3.14*pow($a,2)*$b;
    
  	echo "Volume Tabung = ".$c." Cm^3<br/>";

     }
  }