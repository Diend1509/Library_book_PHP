<?php

require "model/bookManager.php";
require "model/entity/book.php";

$bookManager =  new BookManager();
$bookManager->updateBookStatus("no" , NULL , $_GET["index"]);
header("Location:index.php");
exit;
?>
