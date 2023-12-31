<?php
require "layout/header.php";
?>


<h1 class="my-5">Sách trong danh mục thư viện</h1>
<a class="btn btn-dark text-white px-5 mb-5" href="addbook.php">Thêm sách </a>
<a class="btn btn-dark text-white px-5 mb-5" href="addpeople.php">Thêm thành viên </a>
<a class="btn btn-dark text-white px-5 mb-5" href="peoples.php">Xem danh sách thành viên </a>
<table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">Tiêu đề của cuốn sách</th>
      <th scope="col">Tác giả</th>
      <th scope="col">Ngày phát hành</th>
      <th scope="col">Thể loại</th>
      <th scope="col">Có sẵn</th>
      <th scope="col">Xem cuốn sách</th>
      <th scope="col">Xóa sách</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach($books as $book): ?>
        <th scope="row"><?php echo $book->getBook_name(); ?></th>
        <td><?php echo $book->getWriter(); ?></td>
        <td><?php echo $book->getCreated_date(); ?></td>
        <td><?php echo $book->getCategory(); ?></td>
        <td><?php if ($book->getBorrowed() == "no"): ?>
            <i class="fas fa-check-circle"></i>
            <?php else: ?>
            <i class="fas fa-times-circle"></i>
        <?php endif ?></td>
       <td><a class="btn btn-dark text-white px-5" href="book.php?index=<?php echo $book->getId(); ?>">Xem</a></td> 
       <?php if ($book->getBorrowed() == "no"): ?>
       <td><a class="btn btn-danger text-white px-5" href="deletebook.php?index=<?php echo $book->getId();?>">Xóa khỏi danh mục </a></td>
       <?php else: ?>
        <td><h5>Không thể cuốn sách được mượn</h5></td>
       <?php endif ?>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>





<?php
require "layout/footer.php";
?>





