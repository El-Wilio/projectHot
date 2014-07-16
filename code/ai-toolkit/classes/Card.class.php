<?php


include 'EnergyType.ENUM.php';

abstract class Card {
	//attributes

    private $set;
	private $setID;
    private $name;
	private $rarity;
	
	function __construct(string $set = null, string $setID = null, string $name = null,  $rarity = -1) {
		$this->setSet($set);
		$this->setSetID($setID);
        $this->setName($name);
		$this->setRarity($rarity);
    }

   function setSet($set) {
	   $this->set = $set;
   }
   
   function getSet() {
	   return $this->set;
   }
   
   	function setSetID($setID) {
		$this->setID = $setID;
	}
	
	function getSetID() {
		return $this->setID;
	}
	
   function getName() {
        return $this->name;
   }
   
   function setName($name) {
	   $this->name = $name;
   }
   
   function getRarity() {
	   return $this->rarity;
   }
   
   function setRarity($rarity) {
	   $this->rarity = $rarity;  
		
}

?>
