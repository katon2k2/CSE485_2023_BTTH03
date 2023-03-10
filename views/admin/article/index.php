<?php
    define("PATCH_ROOT_ADMINARTICLE", dirname(__FILE__, 4));
    require PATCH_ROOT_ADMINARTICLE . '/views/layout/header_admin.php';
?>

    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="index.php?controller=article&action=add" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th scope="col">Mã bài viết</th> -->
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Tên bài hát</th>
                            <th scope="col">Mã thể loại</th>
                            <th scope="col">Tóm tắt </th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Mã tác giả</th>
                            <th scope="col">Ngày viết</th>
                            <th scope="col">Hình ảnh</th>

                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($arrActicle as $value) { ?>

                            <tr>
                                <!-- <th scope="row">
                                    <?php print_r($value['ma_bviet']) ?>
                                </th> -->
                                <th scope="row">
                                    <?php print_r($value['tieude']) ?>
                                </th> <th scope="row">
                                    <?php print_r($value['ten_bhat']) ?>
                                </th> <th scope="row">
                                    <?php print_r($value['ma_tloai']) ?>
                                </th> <th scope="row">
                                    <?php print_r($value['tomtat']) ?>
                                </th>
                                <th scope="row" style="max-width: 350px !important;word-wrap: break-word !important; text-align:center !important;">
                                    <?php print_r($value['noidung']) ?>
                                </th>
                                <th scope="row">
                                    <?php print_r($value['ma_tgia']) ?>
                                </th>
                                <th scope="row">
                                    <?php print_r($value['ngayviet']) ?>
                                </th>
                                <th scope="row">
                                    <?php print_r($value['hinhanh']) ?>
                                </th>
                                <td>
                                    <a href="index.php?controller=article&action=update&id=<?php print_r($value['ma_bviet']) ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <a href="index.php?controller=article&action=delete&id=<?php print_r($value['ma_bviet']) ?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php

                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php include PATCH_ROOT_ADMINARTICLE . '/views/layout/footer_admin.php'; ?>