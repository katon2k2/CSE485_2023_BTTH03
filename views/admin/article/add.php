<?php
    define("PATCH_ROOT_ADMINADD", dirname(__FILE__, 4));
    require PATCH_ROOT_ADMINADD . '/views/layout/header_admin.php';
?>

<?php { ?>
    
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
        
            <h3 class="text-center text-uppercase fw-bold">Thêm mới bài viết</h3>
            <form action="<?php $a->process_add(); ?>" method="post" enctype="multipart/form-data">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text w-10">Tiêu đề</span>
                    <input type="text" class="form-control" name="txt_tieude">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Tên bài hát</span>
                    <input type="text" class="form-control" name="txt_tenbaihat">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Thể loại</span>
                    <select class="form-select" aria-label="Default select example" name="option_Theloai">
                       
                    <?php
                        
                         foreach ($matl as $key => $value) {
                    ?>
                                    
                                    <option value="<?php print_r($value)  ?>"><?php print_r($tentl[$key])  ?></option>
                     <?php }?>
                            
                            
                    
                    
                      
                    </select>
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Tóm tắt</span>
                    <textarea type="text" class="form-control" name="txt_tomtat"></textarea>

                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Nội dung</span>
                    <textarea type="text" class="form-control" name="txt_noidung"></textarea>

                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Tác giả</span>
                    <select class="form-select" aria-label="Default select example" name = "option_tacgia">
                            <?php
                                foreach ($matg as $key => $value) {?>
                                    
                                <option value="<?php print_r($value)  ?>"><?php print_r($tentg[$key])  ?></option>
                                <?php }?>
                            
                            

                    </select>
                </div>
                
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Hình ảnh</span>
                   
                   <input type="file" class="form-control" id="article_image" name="hinhanh" accept="image/png, image/jpeg" enctype="multipart/form-data" value="guitt">
                </div>
                <div class="form-group  float-end ">
                    <input type="submit" value="Thêm" class="btn btn-success">
                    <a href="author.php" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php } ?>
<?php include PATCH_ROOT_ADMINADD . '/views/layout/footer_admin.php'; ?>