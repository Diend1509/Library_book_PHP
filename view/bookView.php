<?php
require "layout/header.php";
?>

<a class="btn btn-dark text-white px-5 mb-5" href="index.php">Return</a>
<?php echo $error; ?>
<?php if(is_array($book)): ?>
<div class="row">
    <div class="col">
        <h2>Quyển sách</h2>       
        <div class="card" style="width: 18rem;">
            <div class="card-body">              
                <h5 class="card-title"><?php echo $book[0]->getBook_name(); ?></h5> 
                <p class="card-text"><?php echo $book[0]->getResume() ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $book[0]->getWriter() ?></li>
                <li class="list-group-item"><?php echo $book[0]->getCreated_date() ?></li>
                <li class="list-group-item"><?php echo $book[0]->getCategory() ?></li>
            </ul>
            <div class="card-body">
            <a href="returnbook.php?index=<?php echo $book[0]->getId();?>" class="btn btn-danger text-white px-5" href="">Trả sách</a>
            </div>
        </div>
    </div>
    <div class="col">
        <h2>Người đã mượn</h2>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title">Tên  : <?php echo $book[1]->getfirstname() ?></h4>
                <h4 class="card-title">Họ :<?php echo $book[1]->getlastname() ?></h4>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5>Số thẻ : <?php echo $book[1]->getCard_number() ?></h5></li>
                <li class="list-group-item"><h5>Adresse : <?php echo $book[1]->getAdress() ?></h5></li>
            </ul>
        </div>
    </div> 
</div>          
<?php else : ?>
<div class="row">
    <div class="col">
        <h2>Quyển sách</h2>
        <div class="card" style="width: 18rem;">
            <div class="card-body">    
                <h5 class="card-title"><?php echo $book->getBook_name(); ?></h5> 
                <p class="card-text"><?php echo $book->getResume() ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $book->getWriter() ?></li>
                <li class="list-group-item"><?php echo $book->getCreated_date() ?></li>
                <li class="list-group-item"><?php echo $book->getCategory() ?></li>
            </ul>
        </div>    
    </div>    
    <div class="col">
        <form action="" method="post">
            <div class="mb-3">
                <label for="card_number" class="form-label"><h2>Số thẻ khách hàng</h2></label>
                <input type="number" class="form-control" name="card_number" required>
            </div>
            <button type="submit" class="btn btn-dark">Thuê cuốn sách</button>
        </form> 
    </div>
</div>   
<?php endif ?>                       
         
<?php
require "layout/footer.php";
?>