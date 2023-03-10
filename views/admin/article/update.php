<?php
    define("PATCH_ROOT_ADMINUPDATE", dirname(__FILE__, 4));
    require PATCH_ROOT_ADMINUPDATE . '/views/layout/header_admin.php';
?>

<?php { ?>
    
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
        
            <h3 class="text-center text-uppercase fw-bold">Sua bài viết</h3>
            <form action="<?php $a->process_update(); ?>" method="post" enctype="multipart/form-data">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text w-10">Tiêu đề</span>
                    <input required type="text" class="form-control" name="txt_tieude" value = "<?php print_r($arrActicle[0]['tieude']) ?>">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Tên bài hát</span>
                    <input type="text" class="form-control" name="txt_tenbaihat" value = "<?php print_r($arrActicle[0]['ten_bhat']) ?>">
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
                    <textarea type="text" class="form-control" name="txt_tomtat" value = ""><?php print_r($arrActicle[0]['tomtat']) ?>
                    </textarea>

                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Nội dung</span>
                    <textarea type="text" class="form-control" name="txt_noidung"><?php print_r($arrActicle[0]['noidung']) ?></textarea>

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
                    <span class="input-group-text">Ngày viết</span>
                    <input class="form-control" type="datetime" id="meeting-time" name="txt_ngayviet" value="<?php print_r($arrActicle[0]['ngayviet']) ?>"
                        min="2018-06-07T00:00" max="2025-06-14T00:00">
                   
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Hình ảnh cũ</span>
                    <input type="text" class="form-control" readonly name="txt_hac" value = "<?php print_r($arrActicle[0]['hinhanh']) ?>">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Hình ảnh mới</span>
                   
                   <input type="file" class="form-control" id="article_image" name="hinhanh" accept="image/png, image/jpeg" enctype="multipart/form-data" value="guitt">
                </div>
                <div class="form-group  float-end ">
                    <input type="submit" value="Sửa" class="btn btn-success">
                    <a href="" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php } ?>
<?php include PATCH_ROOT_ADMINUPDATE . '/views/layout/footer_admin.php'; ?>