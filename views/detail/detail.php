<?php require 'views/layout/header.php'; ?>

    </header>
    <main class="container mt-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row mb-5">
            <div class="col-sm-4">
            <img src="<?php echo $detail[0]['hinhanh'];?>" class="img-fluid" alt="...">
            </div>
            <div class="col-sm-8">
                <h5 class="card-title mb-2">
                    <a href="" class="text-decoration-none"><?php echo $detail[0]['ten_bhat'];?></a>
                </h5>
                <p class="card-text"><span class=" fw-bold">Bài hát: </span><?php echo $detail[0]['ten_bhat'];?></p>
                <p class="card-text"><span class=" fw-bold">Thể loại: </span><?php echo $detail[0]['ten_tloai'];?></p>
                <p class="card-text"><span class=" fw-bold">Tóm tắt: </span><?php echo $detail[0]['tomtat'];?></p>
                <p class="card-text"><span class=" fw-bold">Nội dung: </span><?php echo $detail[0]['tomtat'];?></p>
                <p class="card-text"><span class=" fw-bold">Tác giả: </span><?php echo $detail[0]['ten_tgia'];?></p>
            </div>          
        </div>
    </main>
<?php include 'views/layout/footer.php'; ?>