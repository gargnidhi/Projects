<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new SQLite3("db/user.db");
 $result = $db->query("select * from user_details");

$outp = "[";
while($row=$result->fetchArray()){  
	  if ($outp != "[") {$outp .= ",";}
    $outp .= '{"firstname":"'  . $row["firstname"] . '",';
    $outp .= '"lastname":"'   . $row["lastname"]        . '",';
    $outp .= '"email":"'. $row["email"]     . '"}'; 
	}


$outp .="]";
echo($outp);
?>