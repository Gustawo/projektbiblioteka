<?php
class Baza extends CI_Model{
	
	
	function Daj(){
		$sampleData = array('name'=>'Jan','surname'=>'Kowalski','email'=>'samplemail@mail.com');
		return $sampleData;
	}
	
}

?>