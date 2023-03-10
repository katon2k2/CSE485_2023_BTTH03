<?php
    class ArticleHomeService{
        // Chứa các hàm tương tác và xử lý dữ liệu

        public function getAllArticleHome(){
            // Bước 01: Kết nối DB Server
            try {
                $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306','root','');
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            // Bước 02: Truy vấn DL
           
            if(isset($_GET['timkiem'])){
                $tukhoa = $_GET['textimkiem'];
                $sql = "SELECT * FROM baiviet WHERE ten_bhat LIKE '%". $tukhoa ."%' ";
                $stmt = $conn->prepare($sql);
            }else{
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