<?php
require "model/bookManager.php";
require "model/entity/book.php";


$error = null;
$bookManager = new BookManager();
if(!empty($_POST)) {
  $book= new Book($_POST) ;
    $result =  $bookManager->addBook($book);
    if($result) {
        header('Location: index.php');
     }  else {
      $error = "<div class='alert alert-danger text-center' role='alert'><h2>Nous n'avons pas réussi a rajouter le livre</h2></div> ";
     }
  } 




require "view/addbookView.php"; 
?>