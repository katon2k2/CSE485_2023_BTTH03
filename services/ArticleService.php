<?php 
  require_once(PATCH_ROOT . '/configs/PdoConnect.php');


class ArticleService
{
    /**
     * Class constructor.
     */
    
    
    protected $articles;
    protected $ma_TL=[];
    private $isSucsess;
    protected $a =[];
    

    public function querySQL($sql)
    {
        $conn = new PdoConnect();
        $conn = $conn->getConnect();
        $stmt = $conn->prepare($sql);
        $this->isSucsess=$stmt->execute();
        $this->articles = $stmt->fetchAll();
        
    }
    
    public function getAllArticles($sql){
        $this->querySQL($sql);
        foreach ($this->articles as  $row) {
           
            $article = new Article($row['ma_bviet'], $row['tieude'],  $row['tomtat'], $row['ten_bhat'],$row['ma_tloai'], $row['noidung'],$row['ma_tgia'] ,   $row['ngayviet'],$row['hinhanh']);
            // array_push($this->a,$article);
          
            array_push($this->a, (object)[
              'ma_bviet' => $article->getMa_bviet(),
              'tieude' => $article->getTieude(),
              'tomtat' => $article->getTomtat(),
              'ten_bhat' => $article->getTen_bhat(),
              'ma_tloai' => $article->getMa_tloai(),
              'noidung' => $article->getNoidung(),
              'ma_tgia' => $article->getMa_tgia(),
              'ngayviet' => $article->getNgayviet(),
              'hinhanh' => $article->getHinhanh(),
      ]);
                }

       
        return $this->a;
    }
    public function process_update()
   {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $id = $_GET["id"];
        $txt_tieude = $_POST['txt_tieude'];
        $txt_tenbaihat = $_POST['txt_tenbaihat'];
        $option_Theloai = $_POST['option_Theloai'];
        $txt_tomtat = $_POST['txt_tomtat'];
        $txt_noidung = (!$_POST['txt_noidung'])?"":$_POST['txt_noidung'];
        $option_tacgia = $_POST['option_tacgia'];
     
        
        $img_url = ($_FILES['hinhanh']['full_path'])?$_FILES['hinhanh']['full_path']:"";
      
            $sql = "UPDATE `baiviet` SET `tieude`='$txt_tieude',`ten_bhat`='$txt_tenbaihat',`ma_tloai`='$option_Theloai',`tomtat`='$txt_tomtat',`noidung`='$txt_noidung',`ma_tgia`=$option_tacgia,`ngayviet`=CURRENT_TIMESTAMP(),`hinhanh`='$img_url' WHERE baiviet.ma_bviet =$id;";
            
           
     //Thực thi câu lệnh
     
          $this->querySQL($sql);
           if($this->isSucsess){
                header("Location: index.php?controller=article");
           }
         
    }
   }
   public function process_add()
   {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $tieude = ($_POST["txt_tieude"]);
        $tenbaihat = ($_POST["txt_tenbaihat"]);
        $theloai =($_POST["option_Theloai"]);
      
        $tomtat = ($_POST["txt_tomtat"]);
        $noidung = ($_POST["txt_noidung"]);
      $tacgia =($_POST["option_tacgia"]);
      
      

      //
      $target_dir = "assets\images";
      $hinhanhpath = basename($_FILES["hinhanh"]["name"])."";
      $target_file = $target_dir . $hinhanhpath;
      if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)){
        echo("Hinh anh da duoc up load");
      }
      else{
        echo("hinh anh khong duoc up load");
      }
      

    
    $addArticleSql = "INSERT INTO `baiviet`( `tieude`, `ten_bhat`, baiviet.ma_tloai, `tomtat`, `noidung`, baiviet.ma_tgia, `hinhanh`) VALUES ('$tieude','$tenbaihat',$theloai,'$tomtat','$noidung',$tacgia,'$hinhanhpath')";
     //Thực thi câu lệnh
     
          $this->querySQL($addArticleSql);
           if($this->isSucsess){
                header("Location: index.php?controller=article");
           }
         
    }
}
public function process_delete()
{
    $artical_id = $_GET["id"];


    $sql=" DELETE FROM baiviet WHERE baiviet.ma_bviet = $artical_id;";
    $this->querySQL($sql);
    if($this->isSucsess){
         header("Location: index.php?controller=article");
    }
}
public function getNumbersArticle(){
  $DBconnect = new PdoConnect();
  $conn = $DBconnect->getConnect();
  $sql = "SELECT COUNT(baiviet.ma_bviet) AS 'so_luong' FROM baiviet";
  $stmt = $conn->query($sql);
  $numbersArticle = 0;
    while($row = $stmt->fetch()){
      $numbersArticle = $row['so_luong'];
    }
    return $numbersArticle;
}
}