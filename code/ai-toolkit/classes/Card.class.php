<?php


include 'EnergyType.ENUM.php';

abstract class Card {
	//attributes

    private $name;
    private $set;
    private $setNumber;
    private $rarity;

	//Missing: Set, set number, rarity
	
	function __construct(string $name, string $set, int $setNumber, int $rarity) {
        setName($name);
        setSet($set);
        setSetNumber($setNumber);
        setRarity($rarity);
    }

    public function getName() {
        return $this->$name;
    }

    public function getSet() {
        return $this->$set;
    }

    public function getSetNumber() {
        return $this->$setNumber;
    }

    public function getRarity() {
        return $this->$rarity;
    }

    #todo throw error is parameter is not a string
    public function setName($name) {
        $this->$name = $name;
    }

    #todo learn wtf is a set
    public function setSet($set) {
        $this->$set = $set;
    }

    #todo learn wtf is a set number
    public function setSetNumber($setNumber) {
        $this->$setNumber = $setNumber;
    }

    #todo learn more about this rarity, what chris actually means?
    public function setRarity($rarity) {
        $this->$rarity = $rarity;
    }

?>
