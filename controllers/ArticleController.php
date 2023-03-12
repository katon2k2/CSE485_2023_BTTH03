<?php
require  'vendor\autoload.php';
;


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



    public function index($twig)
    {
        // Tương tác với Services/Models        
        $a = new ArticleService();
        $arrActicle = $a->getAllArticles("SELECT * FROM baiviet");
        
      
      
        echo $twig->render('admin/article/index.html.twig', [
            'arrticle' =>   $arrActicle,
            'action' => $a->process_add(),
        ]);

        
    }
    public function add($twig)
    {

        $a = new ArticleService();


        //lay ma tac gia va ten tac gia
        $tg = new AuthorService();
        $matg = $tg->getMaTG("SELECT * FROM `tacgia` WHERE 1");

        $tentg = $tg->getTenTG("SELECT * FROM `tacgia` WHERE 1");
        //lay ma the loai va ten the loai
        $tl = new CategoryService();
        $matl = $tl->getArrMa("SELECT * FROM `theloai` WHERE 1");
        $tentl = $tl->getArrname("SELECT * FROM `theloai` WHERE 1");
        
        
        echo $twig->render('admin/article/add.html.twig', [
            'matg' => $matg,
            'matl' => $matl,
            'tentl'=> $tentl,
            'tentg'=> $tentg,
           
        ]);
        
    }
    public function update($twig)
    {
        $id = $_GET["id"];
        $a = new ArticleService();
        $arrActicle = $a->getAllArticles("SELECT * FROM baiviet where ma_bviet =$id");

        //lay ma tac gia va ten tac gia
        $tg = new AuthorService();
        $matg = $tg->getMaTG("SELECT * FROM `tacgia` WHERE 1");

        $tentg = $tg->getTenTG("SELECT * FROM `tacgia` WHERE 1");
        //lay ma the loai va ten the loai
        $tl = new CategoryService();
        $matl = $tl->getArrMa("SELECT * FROM `theloai` WHERE 1");
        $tentl = $tl->getArrname("SELECT * FROM `theloai` WHERE 1");
        echo $twig->render('admin/article/update.html.twig', [
            'matg' => $matg,
            'matl' => $matl,
            'tentl'=> $tentl,
            'tentg'=> $tentg,
            'arrticle' =>   $arrActicle,
            'action' => $a->process_update(),
        ]);
    }
    public function delete()
    {
        $a = new ArticleService();
        include("views/admin/article/delete.php");
    }
}


?>