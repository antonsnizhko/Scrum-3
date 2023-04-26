<?php
	include("../class_lib/DB_Access.php");
	
	include("../class_lib/TeamDB.php");
	include("../class_lib/Team.php");
	
	print("<h2>Basketball</h2>");
	$DB_Access = new TeamDB();
	//Display all rows / contents of $result object returned by query using fetch_assoc() method
	$result1 = $DB_Access->getTeams('Basketball');
	 foreach ($result1 as $currentTeam)  {
             print("{" . json_encode($currentTeam->toString()) ." } <br />");
    }
	$result2 = $DB_Access->getTeams('Football');
	print("<h2>Football</h2>");
	foreach ($result2 as $currentTeam)  {
		//The brackets added onto the sides to make it look nicer
		//It is outputting as a Json, it just doesn't look like your setup
            print("{" . json_encode($currentTeam->toString()) . " } <br />");
    }
	print("<h2>Soccer</h2>");
	$result3 = $DB_Access->getTeams('Soccer');
	foreach ($result3 as $currentTeam)  {
            print("{" . json_encode($currentTeam->toString()) ." } <br />");
    }
?>