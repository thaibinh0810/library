<?php
require 'models/book.php';
require 'models/bookDAO.php';
require 'models/authorDAO.php';
require 'models/categoryDAO.php';

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    
    
    /**
     * Index::index()
     * 
     * Action control display all book
     * 
     * @return void
     */
    public function index() {
        $model = new BookDAO();
        $category = new CategoryDAO();
        
        $this->view->category= $category->getAllCategory();
        $this->view->book = $model->getAllBook();
        $this->view->render('index/index');
        
    }
    
    
    /**
     * Index::updateBook()
     * 
     * Action control update a book in database
     * 
     * @param bool $arg book ID
     * @return void
     */
    public function updateBook($arg = false){
        if(isset($_POST['title']) && $_POST['title'] != ""){
                $bookTemp = new book();
            
                $bookTemp->setTitle($_POST['title']);
                $bookTemp->setAuthorId($_POST['author']);
                $bookTemp->setCategoryId($_POST['category']);
                
                $modelBook = new BookDAO();
                $modelBook->updateBook($arg,$bookTemp);
                header('location:'.URL);
            }else{
                $modelCategory = new CategoryDAO();
                $modelBook = new BookDAO();
                $modelAuthor = new AuthorDAO();
                
                
                $book = $modelBook->getBookByID($arg);
                $author = $modelAuthor->getAuthorByID($book->getAuthorId());
                $category = $modelCategory->getCategoryByID($book->getCategoryId());
                
                // Get list Categorys
                $this->view->category_list = $modelCategory->getAllCategory();
                $this->view->author_list =$modelAuthor->getAllAuthor();
                
                $this->view->author = $author;
                $this->view->book = $book;
                $this->view->category = $category;
                $this->view->render('index/updateBook');
            }
    } 
    
    /**
     * Index::deleteBook()
     * 
     * Action control delete a book in database
     * 
     * @param bool $arg book ID
     * @return void
     */
    public function deleteBook($arg = false){
        
        $modelBook = new BookDAO();
        $modelBook->deleteBook($arg);
        header('location:'.URL);
    }
    
    /**
     * Index::detail()
     * 
     * Action control display information a book
     * 
     * @param bool $arg book ID
     * @return void
     */
    public function detail($arg = false){
        
        $modelCategory = new CategoryDAO();
        $modelBook = new BookDAO();
        $modelAuthor = new AuthorDAO();
        
        
        $book = $modelBook->getBookByID($arg);
        $author = $modelAuthor->getAuthorByID($book->getAuthorId());
        $category = $modelCategory->getCategoryByID($book->getCategoryId());
        
        
        $this->view->author = $author;
        $this->view->book = $book;
        $this->view->category = $category;
        $this->view->render('index/detail');
        
    }
    
    //insert a book in database
    /**
     * Index::addBook()
     * 
     * Action control add a book in database
     * 
     * @return void
     */
    public function addBook(){
        if(isset($_POST['title']) && $_POST['title'] != ""){
            $bookTemp = new book();
            $bookTemp->setTitle($_POST['title']);
            $bookTemp->setAuthorId($_POST['author']);
            $bookTemp->setCategoryId($_POST['category']);
            
            $modelBook = new BookDAO();
            $modelBook->insertBook($bookTemp);
            header('location:'.URL);
        }else{
            $author = new AuthorDAO();
            $category = new CategoryDAO();
            $this->view->author = $author->getAllAuthor();
            $this->view->category = $category->getAllCategory();
            $this->view->render('index/addBook');
        }
    }


}

