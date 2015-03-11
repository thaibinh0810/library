<?php

require_once 'models/book.php';
class BookDAO extends Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * BookDAO::getAllBook()
     * 
     * get all book in database
     * 
     * @return array => object Book
     */
    public function getAllBook() {
        $result = array();
        $sql = 'SELECT * FROM book';
        $book = $this->db->query($sql);
        
        foreach ($book as $row) {
            $bookTemp = new book($row['book_Id'],$row['title'],$row['author_Id'],$row['category_Id']);
            $result[] = $bookTemp;
        }
        return $result;
    }
    
    
    /**
     * BookDAO::insertBook()
     * 
     * Insert a book in database
     * 
     * @param mixed $book =>object book
     * @return void
     */
    public function insertBook($book){
        $sql = 'INSERT INTO book(title, author_Id, category_Id) VALUES (?,?,?)';
        $bookTemp = $this->db->prepare($sql);
        $bookTemp->execute(array($book->getTitle(),$book->getAuthorId(),$book->getCategoryId()));
    }
    
    /**
     * BookDAO::updateBook()
     * 
     * update a book in database
     * 
     * @param mixed $id=>book ID
     * @param mixed $book=>object Book
     * @return
     */
    public function updateBook($id,$book){
        $sql = 'UPDATE book SET title = ?, author_Id = ?, category_Id = ? WHERE book_Id = ?';
        $bookTemp = $this->db->prepare($sql);
        $bookTemp->execute(array($book->getTitle(),$book->getAuthorId(),$book->getCategoryId(),$id));
    }
    
    
    /**
     * BookDAO::deleteBook()
     * 
     * delete a book in database 
     * 
     * @param mixed $id =>book ID
     * @return
     */
    public function deleteBook($id){
        $sql = 'DELETE FROM book WHERE book_Id= ?';
        $bookTemp = $this->db->prepare($sql);
        $bookTemp->execute(array($id));
    }
    
    
    /**
     * BookDAO::getBookByCategory()
     * 
     * get list book by category ID
     * 
     * @param mixed $category => category Id
     * @return array =>object Book
     */
    public function getBookByCategory($category){
        $sql = 'SELECT * FROM book WHERE category_Id = ?';
        $bookTemp = $this->db->prepare($sql);
        $bookTemp->execute(array($category));
        
        $result = array();
        foreach($bookTemp as $row){
            $book = new book($row['book_Id'],$row['title'],$row['author_Id'],$row['category_Id']);
            $result[] = $book;
        }
        return $result;
    }
    
    
    
    /**
     * BookDAO::getBookByAuthor()
     * 
     * get list book by author ID
     * 
     * @param mixed $author => author ID
     * @return array =>object book
     */
    public function getBookByAuthor($author){
        $sql = 'SELECT * FROM book WHERE author_Id = ?';
        $bookTemp = $this->db->prepare($sql);
        $bookTemp->execute(array($author));
        
        $result = array();
        foreach($bookTemp as $row){
            $book = new book($row['book_Id'],$row['title'],$row['author_Id'],$row['category_Id']);
            $result[] = $book;
        }
        return $result;
    }
    
    
    /**
     * BookDAO::getBookByID()
     * 
     * get detai book by Book ID
     * 
     * @param mixed $id =>book ID
     * @return object book
     */
    public function getBookByID($id){
        $sql = 'SELECT * FROM book WHERE book_Id = ?';
        $bookTemp = $this->db->prepare($sql);
        $bookTemp->execute(array($id));
        
        
        $row = $bookTemp->fetch();
        $result = new book($row['book_Id'],$row['title'],$row['author_Id'],$row['category_Id']);
        
        return $result;
    }
    
}