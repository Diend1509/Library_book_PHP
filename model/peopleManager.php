<?php

class PeopleManager {

  private PDO $db;

  public function __construct() {
      $this->db = new PDO('mysql:host=localhost;dbname=library_php', 'root', '');
  } 
  // Truy xuất người dùng bằng mã cá nhân  
  public function getPeopleByCard_number(int $card_number) {
    $query= $this->db->prepare("SELECT * FROM people WHERE card_number=:card_number");
    $query->execute([
        "card_number" =>  $card_number
      ]);
    $response = $query->fetch(PDO::FETCH_ASSOC);
    if ($response) {
      $result = new People($response);
      return $result;
    } else {
      return $response; 
    }     
  }
  public function addPeople(People $people) {
    $query = $this->db->prepare("INSERT INTO people(firstname, lastname, card_number, adress)
    VALUES(:firstname, :lastname, :card_number, :adress)");
    $result = $query->execute([
        'firstname' => $people->getFirstname(),
        'lastname' => $people->getLastname(),
        'card_number'=> $people->getCard_number(),
        'adress'=> $people->getAdress()
        ]);
    return $result;
  }

  public function getPeoples() {
    $response= $this->db->query("SELECT * FROM people");
    $result = $response->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $key => $people){
        $result[$key] = new People($people);
    }
    return $result;      
  }

  public function deletePeople(int $people_id) {
    $query = $this->db->prepare("DELETE FROM people WHERE id = :people_id ");
    $result = $query->execute([
        "people_id" => $people_id
    ]);
    return $result;
  } 
}
