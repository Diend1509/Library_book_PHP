<?php

require "model/bookManager.php";
require "model/entity/book.php";
require "model/peopleManager.php";
require "model/entity/people.php";
// Controller quản lý việc hiển thị chi tiết của một cuốn sách
$error = null;
$bookManager = new BookManager();

if(isset($_GET["index"]) && !empty($_GET["index"])) {
   $book= $bookManager->getBook($_GET["index"]); 
}

if(!empty($_POST)) {
   $peopleManager = new PeopleManager;
   $people = $peopleManager->getPeopleByCard_number($_POST["card_number"]);
   if($people) {
      $result = $bookManager->updateBookStatus("yes" , $people->getId(), $_GET["index"] );
      if ($result) {
         header('Location: index.php');
      } 
   }  else {
      $error = "<div class='alert alert-danger text-center' role='alert'><h2>Impossible de trouver une personne lié à cette carte</h2></div> ";
   }
} 



require "view/bookView.php";
?>