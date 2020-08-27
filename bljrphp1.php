<?php
class handphone{
	//property
	var $merk;
	var $warna;
	var $ram;
	//method
	function merk_handphone()
	{ return "Merk Handphone Samsung <br/>"; }
	function   warna_handphone ()
	{ return " Warna Hitam <br/>"; }
	function ram_handphone()
	{ return "Ram Handphone 8 GB <br/>"; }
}
	//object
	$handphone = new handphone ();
	echo "Jual Handphone Dengan Tipe : ";
	echo $handphone -> merk_handphone();
	echo $handphone -> warna_handphone();
	echo $handphone -> ram_handphone(); 
?>
 