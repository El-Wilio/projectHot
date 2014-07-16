<!--
/************************************************************************************** |
 * File: 				ai-log.php														|
 * Date Created: 		2014-07-16														|
 * Author: 				Chris Barrieau													|
 *																						|
 * [Root] View file - Development/Testing - For Early AI Development					|
 * This class represents the active pokemon spot on the playing field.					|
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
    <script type="text/javascript" src="../code/ai-toolkit/lib/AIArcanine.lib.js"></script>
    <script type="text/javascript">
    function parseCommand(e) {
		if(e.keyCode == 13) {
			//alert(e.keyCode);
			say("enter pressed!");
			command = document.getElementById('txtTerminalUserInput').getText();
			submitCommand(command);
		}
	}
	
	function say(output) {
		document.getElementById('terminal-content-div').innerHTML += output;
		document.getElementById('txtTerminalUserInput').value('');
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