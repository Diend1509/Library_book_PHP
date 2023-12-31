<?php

class BookManager {

  private PDO $db;

  public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=library_php', 'root', '');
  } 
  // Lấy thông tin tất cả các cuốn sách
  public function getBooks() {
    $response= $this->db->query("SELECT * FROM books");
    $result = $response->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $key => $book){
        $result[$key] = new Book($book);
    }
    return $result;      
  }

  // Lấy thông tin 1 cuốn sách
  public function getBook(int $book_id) {
    $query = $this->db->prepare("SELECT b.*,
    p.firstname, p.lastname, p.card_number, p.adress
    FROM books AS b
    LEFT JOIN people AS p
    ON b.people_id = p.id
    WHERE b.id = :book_id ");
    $query->execute([
        "book_id" => $book_id
    ]);
    $data= $query->fetch(PDO::FETCH_ASSOC);
    $book = new Book($data);     
    if($book->getPeople_id() === NULL) {
      return $book;
    } else {
      $people = new People($data);
      return array($book , $people);
    }     
  }

  // Thêm một cuốn sách mới
  public function addBook(Book $book) {
    $query = $this->db->prepare("INSERT INTO books(book_name, writer, resume, created_date, category, borrowed)
    VALUES(:book_name, :writer, :resume, :created_date, :category, 'no')");
    $result = $query->execute([
        'book_name' => $book->getBook_name(),
        'writer' => $book->getWriter(),
        'resume'=> $book->getResume(),
        'created_date'=> $book->getCreated_date(),
        'category' => $book->getCategory()
        ]);
    return $result;
  }

  // Cập nhật trạng thái mượn sách
  public function updateBookStatus(string $borrowed , ?int $people_id, int $book_id ) {
    $query = $this->db->prepare("UPDATE books SET borrowed = :borrowed , people_id = :people_id WHERE id = :book_id ");
    $result = $query->execute([
        "borrowed"=> $borrowed,
        "people_id" => $people_id,
        "book_id"=> $book_id
    ]);
    return $result;
  }
  //Xóa thông tin 1 cuốn sách
  public function deleteBook(int $book_id) {
    $query = $this->db->prepare("DELETE FROM books WHERE id = :book_id ");
    $result = $query->execute([
        "book_id" => $book_id
    ]);
    return $result;
  } 
}
