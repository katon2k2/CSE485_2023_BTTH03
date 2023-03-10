<?php


    class ArticleController 
    {
        /**
         * Class constructor.
         */
        public function __construct()
        {
            include("models\Article.php");
            include("services\ArticleService.php");
            include("services\AuthorService.php");
            include("services\CategoryService.php");
        }



        public function index(){
            // Tương tác với Services/Models
          
            $a= new ArticleService();
            
            $arrActicle = $a->getAllArticles("SELECT * FROM baiviet");
            // var_dump($a->getAllArticles());
           
            // Tương tác với Hom artcle
            include("views/admin/article/index.php");
        }
        public function add()
        {
            
            $a= new ArticleService();
           
            
            //lay ma tac gia va ten tac gia
            $tg= new AuthorService();
            $matg = $tg->getMaTG("SELECT * FROM `tacgia` WHERE 1");

            $tentg = $tg->getTenTG("SELECT * FROM `tacgia` WHERE 1");
             //lay ma the loai va ten the loai
             $tl= new CategoryService();
             $matl= $tl->getArrMa("SELECT * FROM `theloai` WHERE 1");
             $tentl= $tl->getArrname("SELECT * FROM `theloai` WHERE 1");
            
            include("views/admin/article/add.php");
        }
        public function update()
        {
            $id =$_GET["id"];
            $a= new ArticleService();
            $arrActicle = $a->getAllArticles("SELECT * FROM baiviet where ma_bviet =$id" );
            
            //lay ma tac gia va ten tac gia
            $tg= new AuthorService();
            $matg = $tg->getMaTG("SELECT * FROM `tacgia` WHERE 1");

            $tentg = $tg->getTenTG("SELECT * FROM `tacgia` WHERE 1");
             //lay ma the loai va ten the loai
             $tl= new CategoryService();
             $matl= $tl->getArrMa("SELECT * FROM `theloai` WHERE 1");
             $tentl= $tl->getArrname("SELECT * FROM `theloai` WHERE 1");
            include("views/admin/article/update.php");
        }
        public function delete()
        {
            $a= new ArticleService();
            include("views/admin/article/delete.php");
        }
    }

    
 ?>