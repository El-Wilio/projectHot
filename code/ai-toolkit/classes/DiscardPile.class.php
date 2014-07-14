<?php

/************************************************************************************** |
 * Class: 				DiscardPile														|
 * Date Created: 		2014-07-14														|
 * Author: 				Chris Barrieau													|
 *																						|
 * Model Class																			|
 * This class represents the discard pile used for each game. 							|
 *																						|
 * Modification History																	|
 * Programmer		|	Date		|	Details											|
 * -------------------------------------------------------------------------------------|
 *																						|
 ***************************************************************************************/
class DiscardPile extends Stack {
	//attributes
	
	function __construct() {
		
	}
	
	function search() {
		
	}
	
	function discard($card) {
		array_push($this->discardPile, $card);	
	}
		
}

?>