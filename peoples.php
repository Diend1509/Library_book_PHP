<?php
// Controller quản lý hiển thị của tất cả người dùng

require "model/peopleManager.php";
require "model/entity/people.php";

$peopleManager = new PeopleManager();
$people = $peopleManager ->getPeoples();

require "view/peoplesView.php";
