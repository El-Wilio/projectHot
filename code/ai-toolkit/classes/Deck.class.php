<?php

/************************************************************************************** |
 * Class: 				Deck															|
 * Date Created: 		2014-07-14														|
 * Author: 				Chris Barrieau													|
 *																						|
 * Model Class																			|
 * This class represents a 60-card deck, or the remainder or a deck. 					|
 * Modification History																	|
 * Programmer		|	Date		|	Details											|
 * -------------------------------------------------------------------------------------|
 *																						|
 ***************************************************************************************/
class Deck extends Stack {
	//attributes
	var $cards = Array();
	
	function __construct($id) {
		//Get and load the correct deck
	}
	
	function draw($x = 1) {
		$draw = Array();
		for($i = 1; $i <= $x; $i++) {
			array_push($draw, array_pop($this->$cards));
		}
		return $draw;
	}
	
	function shortShuffle() {
		
	}
	
	function shuffleDeck() {
		$this->manaShuffle();
		$this->shortShuffle();
	}
	
	function manaShuffle($numStacks = 7) {
		$manaStacks = Array($numStacks);
		//Instantiate each $manaStack as a stack
		foreach($manaStacks as $stack) {
			$stack = New Stack();	
		}
		
		while(count($this->cards) > 0) {
			foreach($manaStacks as $stack) {
				
			}
		}
	}
	
	function search() {
		
	}
}

?>