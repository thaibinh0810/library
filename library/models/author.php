<?php

/**
 * @author [ThaiBinh]
 * @copyright [2015]
 */

class Author{
    protected $_author_Id;
    protected $_author_Name;
    protected $_author_Age;
    
    
    public function __construct($author_Id,$author_Name,$author_Age){
        $this->_author_Id = $author_Id;
        $this->_author_Name = $author_Name;
        $this->_author_Age = $author_Age;
    }
    
    public function setAuthorId($author_Id){
        $this->_author_Id = $author_Id;
    }
    
    public function getAuthorId(){
        return $this->_author_Id;
    }
    
    public function setAuthorName($author_Name){
        $this->_author_Name = $author_Name;
    }
    
    public function getAuthorName(){
        return $this->_author_Name;
    }
    
    public function setAuthorAge($author_Age){
        $this->_author_Age = $author_Age;
    }
    
    public function getAuthorAge(){
        return $this->_author_Age;
    }
}


?>