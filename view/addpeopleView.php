<?php
require "layout/header.php";
?>

<h2 class="mb-5">Để thêm một thành viên mới vào danh mục của chúng tôi</h2>

<a class="btn btn-dark text-white px-5 mb-5" href="index.php">Return</a>
<?php echo $error1 ?>
<form action="" method="post">
  <div class="mb-3">
    <label for="firstname" class="form-label">Tên</label>
    <input type="text" class="form-control" name="firstname" required>
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Họ</label>
    <input type="text" class="form-control" name="lastname" required>
  </div>
  <div class="mb-3">
    <label for="card_number" class="form-label">Số thẻ</label>
    <input type="text" class="form-control" name="card_number" required>
  </div>
  <div class="mb-3">
    <label for="adress" class="form-label">Địa chỉ</label>
    <input type="text" class="form-control" name="adress" required>
  </div>
  <button type="submit" class="btn btn-dark">Thêm vào</button>
</form>


<?php
require "layout/footer.php";
?>