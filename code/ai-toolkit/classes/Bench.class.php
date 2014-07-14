<?php

/************************************************************************************** |
 * Class: 				Bench															|
 * Date Created: 		2014-07-14														|
 * Author: 				Chris Barrieau													|
 *																						|
 * Model Class																			|
 * This class represents the Bench on the playing field.								|
 *																						|
 * Modification History																	|
 * Programmer		|	Date		|	Details											|
 * -------------------------------------------------------------------------------------|
 *																						|
 ***************************************************************************************/
class Bench {
	//attributes
	
	var $benchedPokemon = Array();
	
	function __construct() {
		
	}
	
	function bench($Pokemon) {
		array_push($this->benchedPokemon[], $Pokemon);
		//update GUI
	}

}

?>