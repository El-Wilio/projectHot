/************************************************************************************** |
 * File: 				AI Arcanine.lib.js												|
 * Date Created: 		2014-07-16														|
 * Author: 				Chris Barrieau													|
 *																						|
 * PHP lib file - Development/Testing - For Early AI Development						|
 * This script contains utility-style functions for the JS-side of the early 			|
 * development phase of the AI's terminal interface version. 							|
 *																						|
 * Modification History																	|
 * Programmer		|	Date		|	Details											|
 * -------------------------------------------------------------------------------------|
 * Chris B			| 2014-08-19	|	Added AJAX functionality to PHP					| 
 * -------------------------------------------------------------------------------------|	
***************************************************************************************/

/** function submitFunction
  *  Params: 
  * 	str: 		string - name of function to be run
  *		params[]: 	string - list of parameters to be passed 
  *	 This function submits the name and parameters of a function to be executed by PHP.
  *  At this stage, this function is specifically to be used with the ai-log.php
  *
  */
function submitFunction(str, params) {
//	var qString = ;
//YOU ARE HERE FINISH THE AJAX JS TO PHP SHIT YO
	if(params.length > 0) {
		for(x = 0; x < params.length; x++) {
			qStr += "&p" + x + "=" + param[x];
		}
	} 
	
	$.ajax({url: 'scripts/processFunction.php'/* + qStr*/, 
			success: function(request) { say(request); }, 
			error: function() { say("FATAL ERROR"); }, 
			data: {"f" :  "functionName",
					"p1" : "someParam",
					"p2" : "someOtherParam"}
			});
}

function removeFirst(str) {
	str = str.trim();
	if(str.indexOf(" ") > -1) {
		str = str.substring((str.indexOf(" ") + 1), str.length);
	}
	return str;
}