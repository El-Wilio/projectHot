<?php


include 'EnergyType.ENUM.php';

abstract class Card {
	//attributes

    private $id;
    private $name;
	
	function __construct($id, string $name) {
	    $this->$format = $format;
        $this->$name =$name;
    }

    public function getFormat() {
        return $this->$format
    }
	
    public function getName() {
        return $this->name
    }

    public function setFormat($format) {
        $this->$format = $format;
        $this->$name = $name;
    }
		
}

?>
