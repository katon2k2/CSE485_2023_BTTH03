<?php
class Article
{
    private $ma_bviet;
    private $tieude;
    private $tomtat;
    private $ten_bhat;
    private $ma_tloai='';
    private $noidung;
    private $ma_tgia;
    private $ngayviet;
    private $hinhanh;
   
    

   /**
    * Class constructor.
    */
   public function __construct($ma_bviet,$tieude,$tomtat,$ten_bhat,$ma_tloai,$noidung,$ma_tgia,$ngayviet,$hinhanh)
   {
    $this->$ma_bviet = $ma_bviet;
    $this->tieude = $tieude;
    $this->tomtat = $tomtat;
    $this->ten_bhat= $ten_bhat;
    $this->ma_tloai = $ma_tloai;
    $this->noidung= $noidung;
    $this->ma_tgia= $ma_tgia;
    $this->ngayviet = $ngayviet;
    $this->hinhanh=$hinhanh;
   }

    /**
     * Get the value of ma_bviet
     */ 
    public function getMa_bviet()
    {
        return $this->ma_bviet;
    }

    /**
     * Get the value of tieude
     */ 
    public function getTieude()
    {
        return $this->tieude;
    }

    /**
     * Get the value of tomtat
     */ 
    public function getTomtat()
    {
        return $this->tomtat;
    }

    /**
     * Get the value of ten_bhat
     */ 
    public function getTen_bhat()
    {
        return $this->ten_bhat;
    }

    /**
     * Get the value of ma_tloai
     */ 
    public function getMa_tloai()
    {
        return $this->ma_tloai;
    }

    /**
     * Get the value of noidung
     */ 
    public function getNoidung()
    {
        return $this->noidung;
    }

    /**
     * Get the value of ma_tgia
     */ 
    public function getMa_tgia()
    {
        return $this->ma_tgia;
    }

    /**
     * Get the value of ngayviet
     */ 
    public function getNgayviet()
    {
        return $this->ngayviet;
    }

    /**
     * Get the value of hinhanh
     */ 
    public function getHinhanh()
    {
        return $this->hinhanh;
    }
}