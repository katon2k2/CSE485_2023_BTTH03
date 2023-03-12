<?php
    require_once(PATCH_ROOT . '/configs/PdoConnect.php');
    class ArticleHomeService{
        // Chứa các hàm tương tác và xử lý dữ liệu

        public function getAllArticleHome(){

    
            // Bước 02: Truy vấn DL
           
            if(isset($_GET['timkiem'])){
                $DBconnect = new PdoConnect();
			    $conn = $DBconnect->getConnect();
                $tukhoa = $_GET['textimkiem'];
                $sql = "SELECT * FROM baiviet WHERE ten_bhat LIKE '%". $tukhoa ."%' ";
                $stmt = $conn->prepare($sql);
            }else{
                $DBconnect = new PdoConnect();
			    $conn = $DBconnect->getConnect();
                $sql = "SELECT * FROM baiviet"; 
                $stmt = $conn->prepare($sql);
            }
            $stmt->execute();
            // Bước 03: Trả về dữ liệu
            $articlehome = $stmt->fetchAll();
            // Sửa ở đây; Trả về 1 danh sách (Mảng) các ĐỐI TƯỢNG Article;
            return $articlehome;
        }
    }
?>