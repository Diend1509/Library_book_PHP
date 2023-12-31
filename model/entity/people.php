<?php

require_once "model/entity/entity.php";
// Lớp đại diện cho người dùng được lưu trữ trong cơ sở dữ liệu

class People extends Entity {

    protected string $firstname;
    protected string $lastname;
    protected int $card_number;
    protected string $adress;

    
    public function __construct(?array $data = null) {
        if($data) {
        $this->hydrate($data);
        }
    }

    public function setFirstname(string $firstname) {
        $this->firstname = $firstname;
    }

    public function getFirstname():string{
        return $this->firstname;
    }

    public function setLastname(string $lastname) {
        $this->lastname = $lastname;
    }

    public function getLastname():string{
        return $this->lastname;
    }

    public function setCard_number(int $card_number) {
        $this->card_number = $card_number;
    }

    public function getCard_number():int{
        return $this->card_number;
    }

    public function setAdress(string $adress) {
        $this->adress = $adress;
    }

    public function getAdress():string{
        return $this->adress;
    }
}
