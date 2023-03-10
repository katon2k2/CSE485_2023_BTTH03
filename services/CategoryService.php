<?php
class CategoryService{
    private $category;
    private $arrMa=[];
    private $arrname=[];
    private $isSucsess;
    /**
     * Class constructor.
     */
    public function __construct()
    {
       include("models\Category.php");
    }
    

    public function querySQL($sql)
    {
        $conn = new PdoConnect();
        $conn = $conn->getConnect();
        $stmt = $conn->prepare($sql);
        
        $this->isSucsess=$stmt->execute();
        $this->category=$stmt->fetchAll();
    }
    /**
     * Get the value of arrMa
     */ 
    public function  getArrMa($sql){
        $this->querySQL($sql);
       
        foreach ($this->category as  $row) {
            
            $category = new Category($row['ma_tloai'], $row['ten_tloai']);
            $a = $category->getMa_tloai();
           
            array_push($this->arrMa,$a);
        }
     
        return $this->arrMa;
    }
    
    /**
     * Get the value of arrname
     */ 
  
    public function  getArrname($sql){
        $this->querySQL($sql);
        foreach ($this->category as  $row) {
            
            $category = new Category($row['ma_tloai'], $row['ten_tloai']);
            $a = $category->getTen_tloai();
            
            array_push($this->arrname,$a);
        }
     
        return $this->arrname;
    }

   
}
?>