<?php

/**
 * @author [ThaiBinh]
 * @copyright [2015]
 */

class Category{
    protected $_category_Id;
    protected $_category_Name;
    
    public function __construct($category_Id,$category_Name){
        $this->_category_Id = $category_Id;
        $this->_category_Name = $category_Name;
    }
    
    public function setCategoryId($category_Id){
        $this->_category_Id = $category_Id;
    }
    
    public function getCategoryId(){
        return $this->_category_Id;
    }
    
    public function setCategoryName($category_Name){
        $this->_category_Name = $category_Name;
    }
    
    public function getCategoryName(){
        return $this->_category_Name;
    }
    
}


?>