<?php
require "model/bookManager.php";

$bookManager = new BookManager;
$bookManager->deleteBook($_GET["index"]);
header("Location:index.php");
exit

?>