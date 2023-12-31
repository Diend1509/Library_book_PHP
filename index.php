<?php
require "model/bookManager.php";
require "model/peopleManager.php";
require "model/entity/book.php";
require "model/entity/people.php";


$peopleManager = new PeopleManager();
$peoples = new People();



$bookManager = new BookManager();
$books = new Book();
$books = $bookManager->getBooks();



require "view/indexView.php";
?>
