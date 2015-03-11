<?php

/**
 * @author [ThaiBinh]
 * @copyright [2015]
 */
class book{
    protected $_book_Id;
    protected $_title;
    protected $_author_Id;
    protected $_category_Id;
    
    public function __construct($book_Id,$title,$author_Id,$category_Id){
        $this->_book_Id = $book_Id;
        $this->_title = $title;
        $this->_author_Id = $author_Id;
        $this->_category_Id = $category_Id;
    }
    
    public function setBookId($book_Id) {
        $this->_book_Id = $book_Id;
    }
    
    public function getBookId() {
        return $this->_book_Id;
    }
    
    public function setTitle($title) {
        $this->_title = $title;
    }
    
    public function getTitle() {
        return $this->_title;
    }
    
    public function setAuthorId($authorId) {
        $this->_author_Id = $authorId;
    }
    
    public function getAuthorId() {
        return $this->_author_Id;
    }
    
    public function setCategoryId($categoryId) {
        $this->_category_Id = $categoryId;
    }
    
    public function getCategoryId() {
        return $this->_category_Id;
    }
    
}


?>