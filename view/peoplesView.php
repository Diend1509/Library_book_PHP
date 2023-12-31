<p>Thành viên được hiển thị trên trang này
</p>
<?php
require "layout/header.php";
?>


<h1 class="my-5">Danh sách thành viên</h1>
<a class="btn btn-dark text-white px-5 mb-5" href="index.php">Return</a>
<table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">Tên</th>
      <th scope="col">Họ</th>
      <th scope="col">Số thẻ</th>
      <th scope="col">Địa chỉ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach($people as $people): ?>
        <th scope="row"><?php echo $people->getfirstname(); ?></th>
        <td><?php echo $people->getlastname(); ?></td>
        <td><?php echo $people->getCard_number(); ?></td>
        <td><?php echo $people->getAdress(); ?></td>

       <td><a class="btn btn-danger text-white px-5" href="deletepeople.php?index=<?php echo $people->getId();?>">Xóa khỏi danh sách </a></td>
   
    </tr>
    <?php endforeach ?>
  </tbody>
</table>





<?php
require "layout/footer.php";
?>





