<?php

/************************************************************************************** |
 * Class: 				MyDie															|
 * Date Created: 		2014-07-14														|
 * Author: 				Chris Barrieau													|
 *																						|
 * Model Class																			|
 * This class represents a die, to be used for damage counters or "flipping" in the 	|
 * game. 																				|
 *																						|
 * Modification History																	|
 * Programmer		|	Date		|	Details											|
 * -------------------------------------------------------------------------------------|
 *																						|
 ***************************************************************************************/
class MyDie {
	//attributes
	var $currentValue;
	
	function __construct() {
		$this->currentValue = rand(1, 6);
	}
	
	function roll() {
		$this->currentValue = rand(1, 6);
		return $this->currentValue;
	}
		
}

?>