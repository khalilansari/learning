<?php
	
	class mobile
	{
		public $modelno ;
		public $imeino ;
		public $volume ;


		function volumeup(){
			$this->volume++; 	// echo "volume: ".$this->volume;
		}
		function volumedown(){
			$this->volume--;

		}


	function __construct($modelnumber,$imeinumber,$volumenumber){
		$this->modelno = $modelnumber;
		$this->imeino = $imeinumber;
		$this->volume = $volumenumber;

	}
}

class tablet extends mobile
{
	$cameraclick = 0;
	function camerabutton(){
		

	} 

}

	$obj4 = new mobile(123,"bgb12",145);
	echo $obj4->modelno."<br>";
	echo $obj4->imeino."<br>";
	echo $obj4->volume;


	echo "<br>";
	$obj = new mobile;
	// $obj->volumeup();//object name -> function name
	// $obj->volumeup();
	// $obj->volumeup();
	for ($i=1; $i <4 ; $i++) {
		$obj->volumeup();
	}

	$obj->volumedown();
	echo $obj->volume;



	echo "<br>";

	$obj1 = new mobile;
	$obj1->volumedown();
	$obj1->volumedown();
	$obj1->volumedown();
	$obj1->volumedown();
	$obj1->volumedown();

	echo "$obj1->volume";


	echo "<br>";

	$obj2 = new mobile;
	$obj2->volumedown();
	$obj2->volumeup();
	$obj2->volumeup();
	$obj2->volumedown();
	echo "$obj2->volume";





	




	echo "<br><br>";
	echo free;


?>

<!DOCTYPE html>
<html>
<head>
	<title>Motorola</title>
</head>
<body>
<!--<button type="button">volume up</button>
<button type="button">volume down</button>-->

</body>
</html>
