<!--
/************************************************************************************** |
 * File: 				ai-log.php														|
 * Date Created: 		2014-07-16														|
 * Author: 				Chris Barrieau													|
 *																						|
 * [Root] View file - Development/Testing - For Early AI Development					|
 *																						|
 * This file is intended as a testing file and simulated in-browser log for the early 	|
 * development of the Pokemon TCG AI. 													|
 *																						|
 * Modification History																	|
 * Programmer		|	Date		|	Details											|
 * -------------------------------------------------------------------------------------|
 *																						|
 ***************************************************************************************/
-->
<html>
<head>
	<title>projectHot - Ai-Log</title>
	<link href="styles/ai-arcanine.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/scripts/AIArcanine.lib.js"></script>
    <script type="text/javascript">
    function parseCommand(e) {
		if(e.keyCode == 13) {
			//Get command
			var command = document.getElementById('txtTerminalUserInput').value.trim();
			if(command.indexOf(" ") > -1) {				
				var commandName = command.substring(0, command.indexOf(" "));
				say("Command Name: " + commandName);
				command = removeFirst(command);
				say("Parameters: " + command);
				
				var params = { };
				var x = 0;
				
				while(command.indexOf(" ") > -1) {
					params[x] = command.substring(0, command.indexOf(" "));
					command = removeFirst(command);
					x++;
				}
				params[x] = command.trim();
			}
			var output = submitFunction(commandName, params);
		}
	}
	
	//Adds the output of the command to the console log
	function say(output) {
		document.getElementById('terminal-content-div').innerHTML += "<p>" + output + "</p>";
		document.getElementById('txtTerminalUserInput').value = "";
	}
    </script>
</head>
<body>
    <h1>AI-Log</h1>
    <p>Simple file to display the log of the first-stage early development AI.</p>
    <div class="terminal-ai-log">
    	<div class="terminal-top-bar">
        	<p>projectHot - Arcanine - AI - pre-Alpha</p>
        </div>
        <div class="terminal-content" id="terminal-content-div">
		<?php		
        	include('../code/ai-toolkit/start-ai-arcanine.php');
			
        ?>
        </div>
        <div class="terminal-user-input">
        	<input name="txtTerminalUserInput" id="txtTerminalUserInput" type="text" onKeyDown="parseCommand(event);">
        </div>
    </div>
</body>
</html>