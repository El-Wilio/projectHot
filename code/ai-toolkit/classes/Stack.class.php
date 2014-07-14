<?php

/************************************************************************************** |
 * Class: 				Stack															|
 * Date Created: 		2014-07-14														|
 * Author: 				Chris Barrieau													|
 *																						|
 * Model Class																			|
 * A stack data structure for code reuse. 					 							|
 *																						|
 * Modification History																	|
 * Programmer		|	Date		|	Details											|
 * -------------------------------------------------------------------------------------|
 *																						|
 ***************************************************************************************/
class Stack {
	//attributes
	var $cards = Array();
	var $visible = false;
	
	function __construct() {
		
	}
		
	//Takes the index of the card to remove from the discard pile. 
	function remove($id) {
		$card = $this->discardPile[$id];
		unset($this->discardPile[$id]);
		array_values($this->discardPile);
		return $card;
	}
	
	function add($card) {
		//$array_push(	
	}
		
}

?>