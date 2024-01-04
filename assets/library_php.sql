DROP DATABASE IF EXISTS library_php;

CREATE DATABASE library_php CHARACTER SET 'utf8';
USE library_php;

CREATE TABLE People (
  id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  firstname varchar(255) NOT NULL,
  lastname varchar(255) NOT NULL,
  card_number int(11) NOT NULL,
  adress varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB;


CREATE TABLE Books (
  id int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  book_name varchar(255) NOT NULL,
  writer varchar(255) NOT NULL,
  resume text DEFAULT NULL,
  created_date varchar(255) NOT NULL,
  category varchar(255) NOT NULL,
  borrowed varchar(10) NOT NULL,
  people_id int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (people_id) REFERENCES People(id)
) ENGINE=InnoDB;

INSERT INTO people (id, firstname, lastname, card_number, adress) VALUES
(1, 'Jean', 'Paul', 123, '2 route des ptischiens'),
(2, 'Richard', 'Dupond', 456, '9 avenue des maracas');

INSERT INTO books (id, book_name, writer, resume, created_date, category, borrowed, people_id) VALUES
(1, 'Đắc nhân tâm', 'Carnagie', 'Câu chuyện về sự thành công và cách thao túng ng xung quanh', '26 June 1997', 'Fiction, Magie', 'yes', 1),
(2, 'Nhà Giả Kim', 'Linh tinh', 'Cuộc phieu lưu của cậu bé', '2 July 1998', 'Fiction, Magie', 'no', NULL),
(3, 'Những người khốn khổ', 'John Ronald Reuel T', 'Nói về những người không sướng', '1954-1955', 'Fiction, Fantasy, magie', 'no', NULL);



