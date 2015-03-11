<?php
require 'models/bookDAO.php';
require 'models/category.php';
require 'models/authorDAO.php';
require 'models/categoryDAO.php';
class CategoryBook extends Controller {

    public function __construct() {
        parent::__construct();
    }
    
    
    
    /**
     * CategoryBook::index()
     * 
     * Action control Get all category
     * 
     * @return void
     */
    public function index(){
        $modelCategory = new CategoryDAO();
        $this->view->category = $modelCategory->getAllCategory();
        $this->view->render('categoryBook/index');
    }
    
    
    /**
     * CategoryBook::addCategory()
     * 
     * Action control add a category in database
     * 
     * @return void
     */
    public function addCategory(){
        if(isset($_POST['name']) && $_POST['name'] != ""){
            $categoryTemp = new Category();
            $categoryTemp->setCategoryName($_POST['name']);
            
            $modelCategory = new CategoryDAO();
            $modelCategory->insertCategory($categoryTemp);
            header('location:'.$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        }else{
            $modelCategory = new CategoryDAO();
        
            $this->view->category= $modelCategory->getAllCategory();
            $this->view->render('categoryBook/addCategory');
        }
    }
    
    /**
     * CategoryBook::getBook()
     * 
     * Action control get all book by category ID
     * 
     * @param bool $arg category ID
     * @return void
     */
    public function getBook($arg = false){
        
        $category = new CategoryDAO();
        $modelBook = new BookDAO();
        
        $this->view->category= $category->getAllCategory();
        $this->view->book = $modelBook->getBookByCategory($arg);
        $this->view->render('categoryBook/getBook');
        
    }
    
    
    /**
     * CategoryBook::detail()
     * 
     * Action control display infomation category
     * 
     * @param bool $arg
     * @return void
     */
    public function detail($arg=false){
        
        $modelCategory = new CategoryDAO();
        $this->view->category =$modelCategory->getCategoryByID($arg);
        $this->view->render('categoryBook/detail');
    }
    
    
    
    /**
     * CategoryBook::updateCategory()
     * 
     * Action control update a category in database
     *  
     * @param bool $arg categry ID
     * @return void
     */
    public function updateCategory($arg = false){
        
        if(isset($_POST['name']) && $_POST['name'] != ""){
            $categoryTemp = new Category();
            
            $categoryTemp->setCategoryName($_POST['name']);
            
            $modelCategory = new CategoryDAO();
            $modelCategory->updateCategory($arg,$categoryTemp);
            header('location:'.URL.'categoryBook');
            
            }else{
                $modelCategory = new CategoryDAO();
                $this->view->category = $modelCategory->getCategoryByID($arg);
                $this->view->render('categoryBook/updateCategory');
            }
            
        
    }
    
    
    /**
     * CategoryBook::deleteCategory()
     * 
     * Action control delete a category in database
     * 
     * @param bool $arg category ID
     * @return void
     */
    public function deleteCategory($arg = false){
        $modelCategory = new CategoryDAO();
        $modelCategory->deleteCategory($arg);
        header('location: '.URL.'categoryBook');
    }


}
