/************************************************************************************** |
 * File: 				ARArcanine.lib.js												|
 * Date Created: 		2014-07-16														|
 * Author: 				Chris Barrieau													|
 *																						|
 * PHP lib file - Development/Testing - For Early AI Development						|
 * This script contains utility-style functions for the JS-side of the early 			|
 * development phase of the AI's terminal interface version. 							|													|
 *																						|
 * Modification History																	|
 * Programmer		|	Date		|	Details											|
 * -------------------------------------------------------------------------------------|
 *																						|
 ***************************************************************************************/
 
 function say(output) {
	//alert("test " + output);
	document.getElementById('terminal-content-div').innerHTML += "Test";
	document.getElementById('txtTerminalUserInput').text('');
 }