<?php
    class DetailService{
        // Chứa các hàm tương tác và xử lý dữ liệu

        public function __construct(){
            // Bước 01: Kết nối DB Server
            try {
                $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485;port=3306','root','');
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            // Bước 02: Truy vấn DL
            $post_id = $_GET['id'];
            $sql = "SELECT baiviet.ma_bviet, baiviet.ten_bhat, theloai.ten_tloai, baiviet.tomtat, baiviet.noidung, tacgia.ten_tgia, baiviet.hinhanh
            FROM baiviet
            INNER JOIN tacgia on tacgia.ma_tgia = baiviet.ma_tgia 
            INNER JOIN theloai on theloai.ma_tloai = baiviet.ma_tloai
            WHERE baiviet.ma_bviet = {$post_id}";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $detail = $stmt->fetchAll();
            return $detail;
        }
    }
?>