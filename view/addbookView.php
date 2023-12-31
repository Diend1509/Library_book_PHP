<?php
require "layout/header.php";
?>

<h2 class="mb-5">Để thêm một cuốn sách mới vào danh mục của chúng tôi</h2>

<a class="btn btn-dark text-white px-5 mb-5" href="index.php">Return</a>
<?php echo $error ?>
<form action="" method="post">
  <div class="mb-3">
    <label for="book_name" class="form-label">Tên sách</label>
    <input type="text" class="form-control" name="book_name" required>
  </div>
  <div class="mb-3">
    <label for="writer" class="form-label">Tác giả</label>
    <input type="text" class="form-control" name="writer" required>
  </div>
  <div class="mb-3">
    <label for="resume" class="form-label">Bản tóm tắt</label>
    <input type="text" class="form-control" name="resume" required>
  </div>
  <div class="mb-3">
    <label for="created_date" class="form-label">Ngày phát hành</label>
    <input type="text" class="form-control" name="created_date" required>
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Thể loại</label>
    <input type="text" class="form-control" name="category" required>
  </div>
  <button type="submit" class="btn btn-dark">Thêm vào</button>
</form>


<?php
require "layout/footer.php";
?>