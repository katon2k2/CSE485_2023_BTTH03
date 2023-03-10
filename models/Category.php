<?php
class Category  
{
    private $ma_tloai;
    private $ten_tloai;
   
    /**
     * Class constructor.
     */
    public function __construct($ma_tloai,$ten_tloai)
    {
        $this->ma_tloai = $ma_tloai;
        $this->ten_tloai=$ten_tloai;
      
    }
    

    /**
     * Get the value of ma_tloai
     */ 
    public function getMa_tloai()
    {
        return $this->ma_tloai;
    }

    /**
     * Get the value of ten_tloai
     */ 
    public function getTen_tloai()
    {
        return $this->ten_tloai;
    }
}

?>