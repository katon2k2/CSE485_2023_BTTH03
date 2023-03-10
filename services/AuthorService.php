<?php
class AuthorService
{
    protected $author;
    protected $ma_tgia=[];
    protected $ten_tgia=[];
    /**
     * Class constructor.
     */
    public function __construct()
    {
        include("models\Author.php");
    }
    public function querySQL($sql)
    {
        $conn = new PdoConnect();
        $conn = $conn->getConnect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $this->author = $stmt->fetchAll();
    }
    public function getAuthor($sql){
        $this->querySQL($sql);
        foreach ($this->author as  $row) {
            
            $author = new Author($row['ma_tgia'], $row['ten_tgia'],$row['hinh_tgia']);
            array_push($this->author,$author);
            
        }
       
        return $this->author;
    }
    public function getMaTG($sql){
        $this->querySQL($sql);
        foreach ($this->author as  $row) {
            
            $author = new Author($row['ma_tgia'], $row['ten_tgia'],$row['hinh_tgia']);
            $a = $author->getMa_tgia();
            
            array_push($this->ma_tgia,$a);
        }
       
        return $this->ma_tgia;
    }
    public function getTenTG($sql){
        $this->querySQL($sql);
        foreach ($this->author as  $row) {
            
            $author = new Author($row['ma_tgia'], $row['ten_tgia'],$row['hinh_tgia']);
            $a = $author->getTen_tgia();
            
            array_push($this->ten_tgia,$a);
        }
        
        return $this->ten_tgia;
    }
    
}


?>