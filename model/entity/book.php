<?php

require_once "model/entity/entity.php";
// Lớp đại diện cho những cuốn sách được lưu trữ trong cơ sở dữ liệu
class Book extends Entity {

    protected string $book_name;
    protected string $writer;
    protected string $resume;
    protected string $created_date;
    protected string $category;
    protected string $borrowed;
    protected ?int $people_id;

    
    public function __construct(array $data = null) {
        if($data) {
          $this->hydrate($data);
        }
      }

    public function setBook_name(string $book_name) {
        $this->book_name = $book_name;
    }

    public function getBook_name():string{
        return $this->book_name;
    }

    public function setWriter(string $writer) {
        $this->writer = $writer;
    }

    public function getWriter():string {
        return $this->writer;
    }

    public function setResume(string $resume) {
        $this->resume = $resume;
    }

    public function getResume():string {
        return $this->resume;
    }

    public function setCreated_date(string $created_date) {
        $this->created_date = $created_date;
    }

    public function getCreated_date():string {
        return $this->created_date;
    }

    public function setCategory(string $category) {
        $this->category = $category;
    }

    public function getCategory():string {
        return $this->category;
    }

    public function setBorrowed(string $borrowed) {
        $this->borrowed = $borrowed;
    }

    public function getBorrowed():string {
        return $this->borrowed;
    }

    public function setPeople_id($people_id) {
        if ($people_id) {
            $this->people_id = $people_id;
        } else {
            $this->people_id  = NULL ;
        }     
    }

    public function getPeople_id() {
        return $this->people_id;
    }
}
