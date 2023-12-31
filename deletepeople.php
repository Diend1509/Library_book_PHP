<?php
require "model/peopleManager.php";

$peopleManager = new PeopleManager;
$peopleManager->deletePeople($_GET["index"]);
header("Location:index.php");
exit

?>