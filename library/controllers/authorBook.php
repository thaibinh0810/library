<?php
//include library
require 'models/bookDAO.php';
require 'models/author.php';
require 'models/authorDAO.php';
require 'models/categoryDAO.php';


//controller author
class AuthorBook extends Controller {

    public function __construct() {
        parent::__construct();
    }
    
    
    /**
     * AuthorBook::index()
     * 
     * Action Get all Author
     * 
     * @return void
     */
    public function index(){
        $modelAuthor = new AuthorDAO();
        $this->view->author = $modelAuthor->getAllAuthor();
        $this->view->render('authorBook/index');
    }
    
    
    
    /**
     * AuthorBook::addAuthor()
     * 
     * Action add author in database
     * 
     * @return void
     */
    public function addAuthor(){
        if(isset($_POST['name']) && $_POST['name'] != ""){
            $authorTemp = new Author();
            $authorTemp->setAuthorName($_POST['name']);
            $authorTemp->setAuthorAge($_POST['age']);
            
            $modelAuthor = new AuthorDAO();
            $modelAuthor->insertAuthor($authorTemp);
            
            header('location:'.$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        }else{
            $modelAuthor = new AuthorDAO();
        
            $this->view->author= $modelAuthor->getAllAuthor();
            $this->view->render('authorBook/addAuthor');
        }
    }
    
    /**
     * AuthorBook::getBook()
     * 
     * Action control the display all book 
     * 
     * @param bool $arg author ID
     * @return void
     */
    public function getBook($arg = false){
        
        $modelAuthor = new AuthorDAO();
        $modelBook = new BookDAO();
        
        $this->view->author= $modelAuthor->getAllAuthor();
        $this->view->book = $modelBook->getBookByAuthor($arg);
        $this->view->render('authorBook/getBook');
        
    }
    
    /**
     * AuthorBook::detail()
     * 
     * Action control the display infamation author
     * 
     * @param bool $arg
     * @return void
     */
    public function detail($arg=false){
        
        $modelAuthor = new AuthorDAO();
        $author = $modelAuthor->getAuthorByID($arg);
        $this->view->author = $author;
        $this->view->render('authorBook/detail');
    }
    
    /**
     * AuthorBook::updateAuthor()
     * 
     * Action control the display update author
     * 
     * @param bool $arg
     * @return void
     */
    public function updateAuthor($arg = false){
        
        if(isset($_POST['name']) && $_POST['name'] != ""){
            $authorTemp = new Author();
            
            $authorTemp->setAuthorName($_POST['name']);
            $authorTemp->setAuthorAge($_POST['age']);
            
            $modelAuthor = new AuthorDAO();
            $modelAuthor->updateAuthor($arg,$authorTemp);
            header('location:'.URL.'authorBook');
            
            }else{
                $modelAuthor = new AuthorDAO();
                $author = $modelAuthor->getAuthorByID($arg);
                $this->view->author = $author;
                $this->view->render('authorBook/updateAuthor');
            }
            
        
    }
    
    
    /**
     * AuthorBook::deleteAuthor()
     * 
     * Action cotrol delete Author in database
     * 
     * @param bool $arg
     * @return void
     */
    public function deleteAuthor($arg = false){
        $modelAuthor = new AuthorDAO();
        $modelAuthor->deleteAuthor($arg);
        header('location: '.URL.'authorBook');
    }

}
