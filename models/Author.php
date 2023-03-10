<?php
class Author  
{
    private $ma_tgia;
    private $ten_tgia;
    private $hinh_tgia;
    /**
     * Class constructor.
     */
    public function __construct($ma_tgia,$ten_tgia,$hinh_tgia)
    {
        $this->ma_tgia = $ma_tgia;
        $this->ten_tgia=$ten_tgia;
        $this->hinh_tgia= $hinh_tgia;
    }
    

    /**
     * Get the value of ma_tgia
     */ 
    public function getMa_tgia()
    {
        return $this->ma_tgia;
    }

    /**
     * Get the value of ten_tgia
     */ 
    public function getTen_tgia()
    {
        return $this->ten_tgia;
    }
}

?>