<?php

include 'EnergyType.ENUM.php';
require_once('../lib/SetConstants.php');
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

    public function setName(string $name) {
        if(gettype($name) != "string") {
            die("Sorry, but the function setName only accepts a string as a parameter");
        }
        if(preg_match('/^[a-zA-Z][#0-9]?$/', $rarity) != 1) {
            die("I'm sorry, but ".$name." is not a valid pokemon name.");
        }
        $this->$name = $name;
    }

    #To have an idea which set to use please refer to /code/lib/SetConstants.php
    public function setSet($set) {
        if(constant("SET_".$set) == null) {
            die("not a valid set, please use the following syntax XX where XX is the number of the set that currently exist");
        }
        $this->$set = $set;
    }

    #this probably means the card number in the set.
    public function setSetNumber(int $setNumber) {
        if(gettype($setNumber) != "integer") {
            die("set number needs to be an integer.");
        }
        $this->$setNumber = $setNumber;
    }

    public function setRarity(string $rarity) {
        if(gettype($rarity) != "string") {
            die ("rarity needs to be a string");
        }
        if(preg_match('/^(Common|Uncommon|Rare|Ultra Rare|Secret Rare)$/', ucwords($rarity)) != 1) {
           die("I'm sorry, but ".$rarity." is a not a valid rarity term."); 
        }
        $this->$rarity = $rarity;
    }

?>
