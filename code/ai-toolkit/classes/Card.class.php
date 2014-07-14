<?php


include 'EnergyType.ENUM.php';

class Card {
	//attributes

    private $format;
    private $name;
	
	function __construct($format, $name) {
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
