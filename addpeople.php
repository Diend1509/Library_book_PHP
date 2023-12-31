<?php
require "model/peopleManager.php";
require "model/entity/people.php";


$error1 = null;
$peopleManager = new PeopleManager();
if(!empty($_POST)) {
  $people= new People($_POST) ;
    $result =  $peopleManager->addPeople($people);
    if($result) {
        header('Location: index.php');
     } 
    else {
      $error1 = "<div class='alert alert-danger text-center' role='alert'><h2>Nous n'avons pas réussi a rajouter le livre</h2></div> ";
     }
  }




require "view/addpeopleView.php"; 
?>